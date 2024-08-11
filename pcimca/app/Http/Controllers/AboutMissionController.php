<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMissionController extends Controller
{
    public function index(){
        return view('pages.about-us.aboutMission');
    }
}

