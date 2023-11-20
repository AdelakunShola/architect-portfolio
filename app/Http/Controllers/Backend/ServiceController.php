<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Carbon\Carbon;

class ServiceController extends Controller
{
    public function ServiceList(){

        $service = Service::latest()->get();

        return view('backend.service.service_list',compact('service'));
    }//end method


    public function AddService(){
        return view('backend.service.add_service');

    }//end method


   

    public function StoreService(Request $request){

       
        Service::insert([
    
            'title' => $request->title,
            'desc' => $request->desc,
            'created_at' => Carbon::now(),
        ]);
    
        $notification = array(
            'message' => 'Service Data Inserted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('service.list')->with($notification);
    
    } // end method



    public function EditService($id){

        $service = Service::findOrFail($id);
        return view('backend.service.edit_service',compact('service'));
    
    }// end method
    
    
    public function UpdateService(Request $request, $id)
{
    $service = Service::find($id);

    $service->update([
        'title' => $request->title,
        'desc' => $request->desc,
        'created_at' => Carbon::now(),
    ]);

    $notification = array(
        'message' => 'Service Data Updated Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('service.list')->with($notification);
        
    
    
        }// end method
    
    
        public function DeleteService($id)
        {
            Service::findOrFail($id)->delete();
        
            $notification = array(
                'message' => 'Service Data Deleted Successfully',
                'alert-type' => 'success'
            );
        
            return redirect()->back()->with($notification);
       
        }// end method
}

