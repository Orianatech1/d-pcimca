<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MbaEcontentController extends Controller
{
    public function index(){
        return view('pages.acadamics.mbaE-content');
    }
}
