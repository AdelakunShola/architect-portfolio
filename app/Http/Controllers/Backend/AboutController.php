<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function EditAboutUs(){

        return view('backend.about_us.edit_about_us');

    }
}
