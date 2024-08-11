<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPcimcaController extends Controller
{
    public function index(){
        return view('pages.about-us.aboutPCIMCA');
    }
}
