<?php

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
    return view('welcome');
});

Route::get('about-company', function () {return view('website.about-company');});

Route::get('about-team', function () {return view('website.about-team');});

Route::get('about-me', function () {return view('website.about-me');});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
