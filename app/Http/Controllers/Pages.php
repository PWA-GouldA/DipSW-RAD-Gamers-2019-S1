<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    //

    public function index(){
        //         FOLDER . PAGE VIEW TO SHOW
        return view('pages.welcome');
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }


}
