<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\MultiImage;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class FrontendAboutController extends Controller
{
    public function FrontendAbout(){

        $multi_image = MultiImage::latest()->get();
        $aboutpage = AboutUs::find(1);
        
        return view('frontend.about.about', compact('aboutpage','multi_image'));

    }//end method
}
