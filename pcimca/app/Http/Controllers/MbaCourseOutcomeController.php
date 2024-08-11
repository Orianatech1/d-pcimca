<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MbaCourseOutcomeController extends Controller
{
    public function index(){
        return view('pages.acadamics.mbaCourseOutcome');
    }
}