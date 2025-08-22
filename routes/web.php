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

//command to list the routes of the project => php artisan route:list or php artisan r:l


//          address  , clouse(call back function)
Route::get('/mohamed', function () {

    dd("Hello Mohamed");
});

//Route::get('/ahmed', [TestController::class, 'ahmed']);

Route::redirect('/here', 'https://www.google.com');
//Parameter Route 
//Route::get('/printName/{name?}', [TestController::class ,'printName'])->name('printMyNameRoute');

//  Routes Groups
Route::controller(TestController::class)->name('test.')->group(function(){
   Route::get('/ahmed', 'ahmed'); 
   Route::get('/printName/{name?}', 'printName')->name('printMyNameRoute');

});

