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
Route::post('/scores','ViewController@scores');
Route::get('/',"ViewController@index");
Route::get('/login',"ViewController@login");
Route::get('/admin/login',"AdminAuthController@login");
Route::get('/admin/auth',"AdminAuthController@auth");
Route::post('/user/auth',"AuthController@auth");
Route::get('/logout',"AuthController@logout");
Route::get('/admin/home',"AdminAuthController@admin_home");
Route::get('/register',"ViewController@register");
Route::post('/registered',"RegController@insert_register");

