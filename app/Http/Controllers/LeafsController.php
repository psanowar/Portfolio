<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeafsController extends Controller
{
    public function index(){
        return view('leafs.index');
    }

    public function board(){
        return view('leafs.dashboard');
    }


}
