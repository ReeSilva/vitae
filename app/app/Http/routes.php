<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
  return Redirect::to('/br');
});

Route::get('/{locale}', function ($locale) {
  App::setLocale($locale);
  return view('home');
});


Route::get('/{locale}/login', function($locale) {
  App:setLocale($locale);
  return view('login');
});
