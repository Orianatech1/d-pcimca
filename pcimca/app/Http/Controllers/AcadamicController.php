<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcadamicController extends Controller
{
    public function index(){
        return view('pages.acadamics.acedamic');
    }
}
