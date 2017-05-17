<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainDisplayController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('age');
//    }


    public function show()
    {
        return view('content.content');
    }


}
