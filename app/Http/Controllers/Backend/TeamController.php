<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

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
    Image::make

}// end method

}
