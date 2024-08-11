<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustryInstituteController extends Controller
{
    public function index(){
        return view('pages.committee.industry_institute');
    }
}
