<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class McaTeachingLearningController extends Controller
{
    public function index(){
        return view('pages.acadamics.mcaTeachingLearning');
    }
}
