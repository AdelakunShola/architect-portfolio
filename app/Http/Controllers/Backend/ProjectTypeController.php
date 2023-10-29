<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectType;
use App\Models\ProjectDetail;
use Carbon\Carbon;

class ProjectTypeController extends Controller
{
    public function ProjectType(){

        $allData = ProjectType::orderBy('id','desc')->get();
        return view('backend.allproject.projecttype',compact('allData'));
    } //end method

    public function AddProjectType(){

        return view('backend.allproject.addprojecttype');

    }//end method

    public function ProjectTypeStore(Request $request){

       $ProjectType_id = ProjectType::insertGetId([
            'name' => $request->name,
            'created_at' => Carbon::now()
        ]);

        ProjectDetail::insert([
            'ProjectType_id' => $ProjectType_id,
        ]);



        $notification = array(
            'message' => 'Property Type Inserted Successfully', 
            'alert-type' => 'success'
        );
    
        return redirect()->route('project.type.list')->with($notification);

    }//end method

    
}