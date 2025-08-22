<?php

use App\Http\Controllers\SingleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
//use App\Http\Controllers\users\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

/*
1- get  => push data with Request with URL
2- post => data in Request Body not in URL 
3-command to list the routes of the project => php artisan route:list or php artisan r:l
4- Naming Convertion for 
    1-Controller => for module Users,Posts,etc.. make for it Controller (UserController , PostController)

5-Single Action Controller invokable => php artisan make:controller SingleController --invokable
    description : like Constructor run automatic without calling in route
*/




//          address  , clouse(call back function)
Route::get('/mohamed', function () {

    dd("Hello Mohamed");
});

//Route::get('/ahmed', [TestController::class, 'ahmed']);

Route::redirect('/here', 'https://www.google.com');
//Parameter Route 
//Route::get('/printName/{name?}', [TestController::class ,'printName'])->name('printMyNameRoute');

//  Routes Groups
Route::controller(TestController::class)->name('test.')->group(function () {
    Route::get('/ahmed', 'ahmed');
    Route::get('/printName/{name?}', 'printName')->name('printMyNameRoute');
});

Route::get('/user', [UserController::class, 'index']);

//invokable Calling 
Route::get('/singlecontroller' , SingleController::class);
