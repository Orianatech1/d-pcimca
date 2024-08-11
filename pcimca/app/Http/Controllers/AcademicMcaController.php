<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicMcaController extends Controller
{
    public function index(){
        return view('pages.academics.academicMca');
    }
}
