<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntiRagingController extends Controller
{
    public function index(){
        return view('pages.committee.anti_raging');
    }
}
