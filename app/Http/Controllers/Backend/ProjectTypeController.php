<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectType;

class ProjectTypeController extends Controller
{
    public function ProjectType(){

        $allData = ProjectType::orderBy('id','desc')->get();
        return view('backend.allproject.projecttype',compact('allData'));
    } //end method
}
