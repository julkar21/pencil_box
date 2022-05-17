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

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');

// Route::get('/blank', function () {
//     return view('backend.blank');
// })->name('blank');


Route::group(['prefix'=>'/product'],function(){
    Route::get('/create','App\Http\Controllers\Backend\ProductController@create')->name('create');

    Route::post('/store','App\Http\Controllers\Backend\ProductController@store')->name('store');
});
