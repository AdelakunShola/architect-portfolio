<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class ClientController extends Controller
{
    public function ClientList(){

        $allclient = Client::latest()->get();
        return view('backend.client.client',compact('allclient'));

    }//end method



    public function AddClient(){

        return view('backend.client.addclient');

    }//end method


    public function StoreClient(Request $request){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(200,120)->save('upload/client/'.$name_gen);
        $save_url = 'upload/client/'.$name_gen;
    
        Client::insert([
    
           
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);
    
        $notification = array(
            'message' => 'Client Logo Inserted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('client.list')->with($notification);
    
    } // end method


    public function DeleteClient($id){

        $item = Client::findOrFail($id);
        $img = $item->image;
        unlink($img);

        Client::findOrFail($id)->delete();

          $notification = array(
                'message' => 'Client Image Deleted Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);

    }// end method
}
