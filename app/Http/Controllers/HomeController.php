<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  home ()
    {
        return view("frontend.layout.app");
    }

    public function index()
    {
        return view("frontend.pages.index");
    }


}
