<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
class TeamController extends Controller
{

    public function AllTeam(){

    $team = Team::latest()->get();
    return view('backend.team.all_team',compact('team'));

}// end method AllTeam


public function AddTeam(){

  
    return view('backend.team.add_team');

}// end method


public function StoreTeam(Request $request){

    $image = $request->file('image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(562,562)->save('upload/team/'.$name_gen);
    $save_url = 'upload/team/'.$name_gen;

    Team::insert([

        'name' => $request->name,
        'position' => $request->position,
        'instagram' => $request->instagram,
        'twitter' => $request->twitter,
        'youtube' => $request->youtube,
        'image' => $save_url,
        'created_at' => Carbon::now(),
    ]);

    $notification = array(
        'message' => 'Team Data Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.team')->with($notification);

} // end method


public function EditTeam($id){

    $team = Team::findOrFail($id);
    return view('backend.team.edit_team',compact('team'));

}// end method


public function UpdateTeam(Request $request){

    $team_id = $request->id;

    if($request->file('image')){

    $image = $request->file('image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(562,562)->save('upload/team/'.$name_gen);
    $save_url = 'upload/team/'.$name_gen;

    Team::findOrFail($team_id)->update([

        'name' => $request->name,
        'position' => $request->position,
        'instagram' => $request->instagram,
        'twitter' => $request->twitter,
        'youtube' => $request->youtube,
        'image' => $save_url,
        'created_at' => Carbon::now(),
    ]);

    $notification = array(
        'message' => 'Team Data Updated Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.team')->with($notification);

    } else {
        Team::findOrFail($team_id)->update([

            'name' => $request->name,
            'position' => $request->position,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'created_at' => Carbon::now(),
        ]);
    
        $notification = array(
            'message' => 'Team Data Updated Without Image Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.team')->with($notification);
    }// end else


    }// end method


    public function DeleteTeam($id){

        $item = Team::findOrFail($id);
        $img = $item->image;
        unlink($img);

        Team::findOrFail($id)->delete();

          $notification = array(
                'message' => 'Team Data Deleted Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);

    }// end method


}
