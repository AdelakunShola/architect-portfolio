<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\MultiImage;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;



class AboutController extends Controller
{
    public function AboutPage(){
        $multi_image = MultiImage::latest()->get();
        $aboutpage = AboutUs::find(1);

        return view('backend.about_us.about_us', compact('aboutpage','multi_image'));
    }// end method

    public function UpdateAbout(Request $request){

        $about = $request->id;

             AboutUs::findOrFail($about)->update([
                'short_title' => $request->short_title,
                'main_title' => $request->main_title,
                'short_desc' => $request->short_desc,
                'main_desc' => $request->main_desc,
                'link_url' => $request->link_url,
                'created_at' => Carbon::now()

            ]); 

            $notification = array(
            'message' => 'About page updated successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


     }// End Method 


public function AboutMultiImage(){

    $multiimg = MultiImage::latest()->get();
     return view('backend.about_us.multi_image', compact('multiimg'));

}// end method




public function UpdateMulti(Request $request){

    $image = $request->file('multi_image');

    foreach ($image as $multi_image) {

       $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($multi_image)->resize(800,500)->save('upload/about/'.$name_gen);
        $save_url = 'upload/about/'.$name_gen;

        MultiImage::insert([
             
            'multi_image' => $save_url,
            'created_at' => Carbon::now()

        ]); 

         } // End of the froeach


        $notification = array(
        'message' => 'Multi Image Inserted Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

   

}// end method


public function deleteAboutMulti($id)
{
    $imageToDelete = MultiImage::findOrFail($id);

    // Delete the physical file
    if (File::exists(public_path($imageToDelete->multi_image))) {
        File::delete(public_path($imageToDelete->multi_image));
    }

    // Delete the record from the database
    $imageToDelete->delete();

    $notification = array(
        'message' => 'Multi Image Inserted Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);
}



}