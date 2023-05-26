<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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

//это то что было
//Route::get('/', 'MainController@home');
//Route::get('/about', 'MainController@about');
//Route::get('/review', 'MainController@review')->name('review');
//Route::post('/check', 'MainController@check');



Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/about', 'App\Http\Controllers\MainController@about');

Route::get('/review', 'App\Http\Controllers\MainController@review')->name('review');

Route::post('/review/check', 'App\Http\Controllers\MainController@review_check');
