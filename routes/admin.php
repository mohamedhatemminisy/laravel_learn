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
Route::group(['prefix'=>'admin', 'middleware'=>'guest'],function(){

    Route::get('/name', function () {
        return 'mohamed';
    })->name('admin_name');
    Route::get('/age/{id}', function ($id) {
        return $id;
    });
    
    Route::get('/login',function(){
       return "you must login";
    })->name('login');

});

Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function(){
    Route::get('/country', function () {
        return 'Egypt';
    });
    
});



// Route::get('/test1/ddvsha/ddas',function(){
//    return "hello";
// })->name('test');

// Route::get('/test2/{id}',function(){
//     return "hello with id";
//  })->name('test2');

 
 