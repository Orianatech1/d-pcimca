<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MbaAcademicCalanderController extends Controller
{
    public function index(){
        return view('pages.acadamics.mbaAcademicCalander');
    }
}
