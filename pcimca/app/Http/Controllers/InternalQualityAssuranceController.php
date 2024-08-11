<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternalQualityAssuranceController extends Controller
{
    public function index(){
        return view('pages.committee.internal_quality_assurance');
    }
}