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


    public function AddProject(){
        
        $addproject = ProjectDetail::all();
        return view('backend.allproject.add_project',compact('addproject'));

    }//end method


    public function ProjectList(){
        
        $allproject = ProjectDetail::all();
        return view('backend.allproject.all_project',compact('allproject'));

    }//end method

    
}
