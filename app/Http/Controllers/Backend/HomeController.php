<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homepage;
use App\Models\HomeSlide;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    public function HomePage (){
        $homepage = Homepage::find(1);
        return view('backend.homepage.homepage',compact('homepage'));
    }// end method


    public function UpdateHome(Request $request){

        $home = $request->id;

        Homepage::findOrFail($home)->update([
                'short_title' => $request->short_title, 
                'short_desc' => $request->short_desc,
                'created_at' => Carbon::now()

            ]); 

            $notification = array(
            'message' => 'Home page updated successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// end method

    public function HomeMultiImage (){

        return view('backend.homepage.homepage_image');

    }// end method


    public function UpdateSlide (Request $request){

        $image = $request->file('multi_image');

        foreach ($image as $multi_image) {
    
           $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();  // 3434343443.jpg
    
            Image::make($multi_image)->resize(1920,900)->save('upload/multi/'.$name_gen);
            $save_url = 'upload/multi/'.$name_gen;
    
            HomeSlide::insert([
                 
                'multi_image' => $save_url,
                'created_at' => Carbon::now()
    
            ]); 
    
             } // End of the froeach
    
    
            $notification = array(
            'message' => 'home slide Image Inserted Successfully', 
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);

        
    }// end method
}
