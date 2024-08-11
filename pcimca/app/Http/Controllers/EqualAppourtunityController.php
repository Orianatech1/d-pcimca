<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EqualAppourtunityController extends Controller
{
    public function index(){
        return view('pages.committee.equal_appourtunity');
    }
}
