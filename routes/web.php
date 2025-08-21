<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

/*
1- get  => push data with Request with URL
2- post => data in Request Body not in URL 
*/

//          address  , clouse(call back function)
Route::get('/mohamed', function () {

    dd("Hello Mohamed");
});

Route::get('/ahmed', [TestController::class, 'ahmed']);

Route::redirect('/here', 'https://www.google.com');
//Parameter Route 
Route::get('/printName/{name}', [TestController::class ,'printName']);
