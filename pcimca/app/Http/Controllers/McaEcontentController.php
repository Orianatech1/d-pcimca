<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class McaEcontentController extends Controller
{
    public function index(){
        return view('pages.acadamics.mcaE-content');
    }
}
