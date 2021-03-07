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

Route::get('/', 'App\Http\Controllers\MainController@mainPage');

Route::get('send', 'App\Http\Controllers\MainController@sendPage');

Route::post('send/check', 'App\Http\Controllers\SendController@sendRequest');

Route::get('send/thanks', 'App\Http\Controllers\SendController@thanksPage')->name('Thanks');

Route::get('send/sorry', 'App\Http\Controllers\SendController@sorryPage')->name('Sorry');
