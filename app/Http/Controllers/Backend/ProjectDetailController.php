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


    public function StoreProject(Request $request){

        // Store single image
    $image = $request->file('image');
    $save_url = null;

    // Check if an image was uploaded
    if ($image) {
        // Generate a unique name for the image
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        
        // Resize and save the image using Intervention Image
        $img = Image::make($image)->resize(1080, 1349);
        $img->save('upload/projectdetail/' . $name_gen);
        
        // Construct the URL of the saved image
        $save_url = 'upload/projectdetail/' . $name_gen;
    }
    
        // Create and save the project detail
        $projectDetail = new ProjectDetail();
        $projectDetail->title = $request->title;
        $projectDetail->short_desc = $request->short_desc;
        $projectDetail->main_desc = $request->main_desc;
        $projectDetail->client = $request->client;
        $projectDetail->project_type = $request->project_type;
        $projectDetail->creative_director = $request->creative_director;
        $projectDetail->link_url = $request->link_url;
        $projectDetail->image = $save_url;
        $projectDetail->created_at = Carbon::now();
        $projectDetail->save();
    
        // Store multiple images
        if ($request->hasFile('multi_img')) {
            $files = $request->file('multi_img');
            foreach ($files as $file) {
                $imgName = date('YmdHi') . $file->getClientOriginalName();
    
                // Resize the multi-image
                $img = Image::make($file)->resize(1920, 1080);
                $img->save('upload/projectdetail/multi/' . $imgName);
    
                $subimage = new MultiImageProject();
                $subimage->project_detail_id = $projectDetail->id;
                $subimage->multi_image = $imgName;
                $subimage->save();
            }
        }
    
        $notification = [
            'message' => 'Project Details Inserted Successfully',
            'alert-type' => 'success'
        ];
    
        return redirect()->route('project.list')->with($notification);
    }
    
    public function UpdateProject(Request $request, $id){
        $project = ProjectDetail::find($id);
        $project->title = $request->title;
        $project->short_desc = $request->short_desc;
        $project->main_desc = $request->main_desc;
        $project->client = $request->client;
        $project->project_type = $request->project_type;
        $project->creative_director = $request->creative_director;
        $project->link_url = $request->link_url;
    
        // Update single image if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 1080)->save('upload/projectdetail/' . $name_gen);
            $project->image = 'upload/projectdetail/' . $name_gen;
        }
    
        $project->save();
    
        // Update multi-images if provided
        if ($request->hasFile('multi_img')) {
            $files = $request->file('multi_img');
            foreach ($files as $file) {
                $imgName = date('YmdHi') . $file->getClientOriginalName();
    
                // Resize the multi-image
                $img = Image::make($file)->resize(1920, 1080);
                $img->save('upload/projectdetail/multi/' . $imgName);
    
                $subimage = new MultiImageProject();
                $subimage->project_detail_id = $project->id;
                $subimage->multi_image = $imgName;
                $subimage->save();
            }
        }
    
        $notification = [
            'message' => 'Project Updated Successfully',
            'alert-type' => 'success'
        ];
    
        return redirect()->route('project.list')->with($notification);
    }
    

    



    


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


    public function DeleteProject($id){

        ProjectDetail::findOrFail($id)->delete();
    
          $notification = array(
                'message' => 'Project Deleted Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
    
    }// end method



    
}


