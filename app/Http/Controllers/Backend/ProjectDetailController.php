<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\ProjectType;
use App\Models\MultiImageProject;
use App\Models\ProjectDetail;
use Carbon\Carbon;

class ProjectDetailController extends Controller
{
    public function EditProject($id){
        
        $multiimg = MultiImageProject::where('project_detail_id',$id)->get();
        $editData = ProjectDetail::find($id);
        return view('backend.allproject.project_details',compact('editData','multiimg'));


    }//end method


    public function UpdateProject(Request $request, $id){

        $project = ProjectDetail::find($id);
        $project->title = $request->title;
        $project->short_desc = $request->short_desc;
        $project->main_desc = $request->main_desc;
        $project->client = $request->client;
        $project->project_type = $request->project_type;
        $project->creative_director = $request->creative_director;
        $project->link_url = $request->link_url;

        ///Update single image

        if($request->file('image')){

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(360,560)->save('upload/projectdetail/'.$name_gen);
            $project['image'] = $name_gen;    
        }

        $project->save();

        ///update multi-image

        if($project->save()){
            $files = $request->multi_img;
            if(!empty($files)){
                $subimage = MultiImageProject::where('project_detail_id',$id)->get()->toArray();
                MultiImageProject::where('project_detail_id',$id)->delete();

            }
            if(!empty($files)){
                foreach($files as $file){
                    $imgName = date('YmdHi').$file->getClientOriginalName();
                    $file->move('upload/projectdetail/multi/',$imgName);
                    $subimage['multi_image'] = $imgName;

                    $subimage = new MultiImageProject();
                    $subimage->project_detail_id = $project->id;
                    $subimage->multi_image = $imgName;
                    $subimage->save();
                }
        }
        
    }///end if condition

    $notification = array(
        'message' => 'Project Updated Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

    }//end method



    public function MultiImageDelete($id){

        $deletedata = MultiImageProject::where('id',$id)->first();

        if($deletedata){

            $imagePath = $deletedata->multi_image;

            // Check if the file exists before unlinking 
            if (file_exists($imagePath)) {
               unlink($imagePath);
               echo "Image Unlinked Successfully";
            }else{
                echo "Image does not exist";
            }

            //  Delete the record form database 

            MultiImageProject::where('id',$id)->delete();

        }

        $notification = array(
            'message' => 'Multi Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }//End Method 


    public function AddProject(){
        
        $addproject = ProjectDetail::all();
        return view('backend.allproject.add_project',compact('addproject'));

    }//end method


    public function ProjectList(){
        
        $allproject = ProjectDetail::all();
        return view('backend.allproject.all_project',compact('allproject'));

    }//end method

    
}
