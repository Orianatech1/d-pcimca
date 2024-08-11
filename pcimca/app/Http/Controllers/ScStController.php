<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScStController extends Controller
{
    public function index(){
        return view('pages.committee.sc_st');
    }
}
