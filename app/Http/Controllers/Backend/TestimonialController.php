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


   

    public function StoreTestimonial(Request $request){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(240,240)->save('upload/testimonial/'.$name_gen);
        $save_url = 'upload/testimonial/'.$name_gen;
    
        Testimonial::insert([
    
            'name' => $request->name,
            'position' => $request->position,
            'text' => $request->text,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);
    
        $notification = array(
            'message' => 'Testimonial Data Inserted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('testimonial.list')->with($notification);
    
    } // end method



    public function EditTestimonial($id){

        $testimonial = Testimonial::findOrFail($id);
        return view('backend.testimonial.edit_testimonial',compact('testimonial'));
    
    }// end method
    
    
    public function UpdateTestimonial(Request $request){
    
        $testimonial_id = $request->id;
    
        if($request->file('image')){
    
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(240,240)->save('upload/testimonial/'.$name_gen);
        $save_url = 'upload/testimonial/'.$name_gen;
    
        Testimonial::findOrFail($testimonial_id)->update([
    
            'name' => $request->name,
            'position' => $request->position,
            'text' => $request->text,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);
    
        $notification = array(
            'message' => 'Testimonial Data Updated Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('testimonial.list')->with($notification);
    
        } else {
            Testimonial::findOrFail($testimonial_id)->update([
    
            'name' => $request->name,
            'position' => $request->position,
            'text' => $request->text,
            'created_at' => Carbon::now(),
            ]);
        
            $notification = array(
                'message' => 'Testimonial Data Updated Without Image Successfully',
                'alert-type' => 'success'
            );
        
            return redirect()->route('testimonial.list')->with($notification);
        }// end else
    
    
        }// end method
    
    
        public function DeleteTestimonial($id){
    
            $item = Testimonial::findOrFail($id);
            $img = $item->image;
            unlink($img);
    
            Testimonial::findOrFail($id)->delete();
    
              $notification = array(
                    'message' => 'Testimonial Data Deleted Successfully',
                    'alert-type' => 'success'
                );
        
                return redirect()->back()->with($notification);
    
        }// end method
}
