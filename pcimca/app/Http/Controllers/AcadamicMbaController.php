<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcadamicMbaController extends Controller
{
    public function index(){
        return view('pages.acadamics.acedamicMba');
    }
}
