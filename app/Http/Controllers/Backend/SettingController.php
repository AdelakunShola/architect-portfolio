<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{


    public function SiteSetting(){

        $site = SiteSetting::find(1);
        return view('backend.setting.site_update',compact('site'));

    }//end method



    public function SiteUpdate(Request $request){

        $site_id = $request->id;

        if($request->file('logo')){

            $image = $request->file('logo');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(140,41)->save('upload/site/'.$name_gen);
            $save_url = 'upload/site/'.$name_gen;

            SiteSetting::findOrFail($site_id)->update([

                'phone' => $request->phone,
                'address' => $request->address,
                'email' => $request->email,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
                'copyright' => $request->copyright, 
                
                'logo' => $save_url, 
            ]);

            $notification = array(
                'message' => 'Site Setting Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);


        } else {

            SiteSetting::findOrFail($site_id)->update([

                'phone' => $request->phone,
                'address' => $request->address,
                'email' => $request->email,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
                'copyright' => $request->copyright, 
                
            ]);

            $notification = array(
                'message' => 'Site Setting Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } // End Eles 


    }// End Method 
}
