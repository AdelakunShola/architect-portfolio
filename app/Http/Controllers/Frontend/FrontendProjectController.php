<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectType;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class FrontendProjectController extends Controller
{
    public function AllFrontendProject(){

        $project = ProjectType::latest()->get();
        return view('frontend.project.allproject',compact('project'));

    }//end method
}
