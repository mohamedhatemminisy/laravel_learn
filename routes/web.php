<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $obj = new \stdClass();
    $obj->name = "mohamed";
    $obj->age  = "26";
    return view('welcome',compact('obj'));

});

Route::get('/test1/ddvsha/ddas',function(){
   return "hello";
})->name('test');

Route::get('/test2/{id}',function(){
    return "hello with id";
 })->name('test2');

 
 