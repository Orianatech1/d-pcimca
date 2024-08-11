<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutCampusController extends Controller
{
    public function index()
    {
        return view('pages.about-us.aboutCampusTour');
    }
}
