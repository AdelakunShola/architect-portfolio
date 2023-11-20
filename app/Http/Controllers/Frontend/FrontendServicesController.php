<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendServicesController extends Controller
{
    public function FrontendServices(){

        return view('frontend.services.services');
    }// end method

    
}
