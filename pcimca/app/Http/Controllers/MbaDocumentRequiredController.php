<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MbaDocumentRequiredController extends Controller
{
    public function index(){
        return view('pages.about-us.mbaDocumentRequired');
    }
}
