<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrievanceRedressalController extends Controller
{
    public function index(){
        return view('pages.committee.grievance_redressal');
    }
}
