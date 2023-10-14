<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;


class AboutController extends Controller
{
    public function EditAboutUs()
    {
        $about = AboutUs::find(1);

        return view('backend.about_us.edit_about_us', compact('about'));
    }// end method

    public function UpdateAbout(Request $request)
    {
       
}// end method

}