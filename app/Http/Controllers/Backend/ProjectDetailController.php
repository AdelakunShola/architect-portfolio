<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\ProjectType;
use App\Models\ProjectDetail;
use Carbon\Carbon;

class ProjectDetailController extends Controller
{
    public function EditProject($id){
        
        $editData = ProjectDetail::find($id);
        return view('backend.allproject.project_details',compact('editData'));


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
        


    }//end method


    public function AddProject(){
        
        $addproject = ProjectDetail::all();
        return view('backend.allproject.add_project',compact('addproject'));

    }//end method


    public function ProjectList(){
        
        $allproject = ProjectDetail::all();
        return view('backend.allproject.all_project',compact('allproject'));

    }//end method

    
}
