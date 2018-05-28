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

Route::get('construction', function () {return view('website.homepage.construction');});

Route::get('consultant', function () {return view('website.homepage.consultant');});

Route::get('corporate', function () {return view('websit.homepage.corporate');});

Route::get('gym', function () {return view('website.homepage.gym');});

Route::get('index-default', function () {return view('website.homepage.index-default');});

Route::get('medical', function () {return view('website.homepage.medical');});

Route::get('mobile-app', function () {return view('website.homepage.mobile-app');});

Route::get('personal', function () {return view('website.homepage.personal');});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
