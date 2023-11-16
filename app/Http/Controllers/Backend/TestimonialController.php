<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    public function TestimonialList(){

        $testimonial = Testimonial::latest()->get();

        return view('backend.testimonial.all_testimonial',compact('testimonial'));
    }//end method


    public function AddTestimonial(){
        return view('backend.testimonial.add_testimonial');

    }//end method
}
