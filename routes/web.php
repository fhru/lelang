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
    return view('home');
});

Route::get('/login', 'App\Http\Controllers\AuthController@login')->name('login');
Route::get('/register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');
Route::post('/postlogin', 'App\Http\Controllers\AuthController@postlogin');
Route::post('/postregister', 'App\Http\Controllers\AuthController@postregister');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/lelang', 'App\Http\Controllers\MainController@lelang');
    Route::get('/lelang/{parameter}/detail', 'App\Http\Controllers\MainController@detail');
    
    Route::post('/lelang/{id}/addbid', 'App\Http\Controllers\MainController@addbid');
    
    Route::get('/lelang/fashion', 'App\Http\Controllers\MainController@fashion');
    Route::get('/lelang/automotive', 'App\Http\Controllers\MainController@automotive');
    Route::get('/lelang/elektronik', 'App\Http\Controllers\MainController@elektronik');
    Route::get('/lelang/rumahtangga', 'App\Http\Controllers\MainController@rumahtangga');

    Route::get('/profile', 'App\Http\Controllers\MainController@profile');
 });