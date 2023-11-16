<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectType;
use App\Models\ProjectDetail;
use App\Models\MultiImageProject;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class FrontendProjectController extends Controller
{
    public function AllFrontendProject(){

        $project = ProjectType::latest()->get();
        return view('frontend.project.allproject',compact('project'));

    }//end method

    public function ProjectDetailsPage($id){

        $projectdetails = ProjectDetail::find($id);
        $multiImage = MultiImageProject::where('project_detail_id',$id)->get();
        return view('frontend.project.project_detail',compact('projectdetails','multiImage'));

    }//end method



}
