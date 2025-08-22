<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function ahmed()
    {
        return view('index');
    }

    function printName($name = "Anonmous")
    {
        dd("Hello $name from PrintName Function");
    }
}
