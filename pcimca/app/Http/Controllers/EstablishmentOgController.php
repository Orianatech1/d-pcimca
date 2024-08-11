<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstablishmentOgController extends Controller
{
    public function index(){
        return view('pages.committee.establishment_og');
    }
}
