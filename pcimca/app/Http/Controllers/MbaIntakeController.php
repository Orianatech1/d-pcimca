<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MbaIntakeController extends Controller
{
    public function index(){
        return view('pages.about-us.mbaIntake');
    }
}
