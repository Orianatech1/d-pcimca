<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MbaController extends Controller
{
    public function index(){
        return view('pages.about-us.MBA');
    }

}
