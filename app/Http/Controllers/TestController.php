<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function ahmed()
    {
        return view('index');
    }

    function printName($name)
    {
        dd("Hello $name from PrintName Function");
    }
}
