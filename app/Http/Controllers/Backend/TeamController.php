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
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtention();
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

}
