<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function FrontendContact(){

        return view('frontend.contact.contact');
    }// end method

    public function StoreContactUs(Request $request){

        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Message Sent Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

     }// End Method


     public function AdminContactMessage(){

        $contact = Contact::latest()->get();
        return view('backend.contact.contact_message',compact('contact'));

     }// End Method
}

