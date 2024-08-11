<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class McaAcademicCalanderController extends Controller
{
    public function index(){
        return view('pages.acadamics.mcaAcademiCalander');
    }
}
