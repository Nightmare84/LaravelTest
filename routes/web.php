<?php

use Illuminate\Support\Facades\Route;

Route::get('/', ['as' => 'home', 'uses' => 'App\Http\Controllers\IndexController@show']);

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/about', ['as' => 'about', 'uses' => 'App\Http\Controllers\AboutController@show']);
Route::get('/admin', ['as' => 'admin', 'uses' => 'App\Http\Controllers\AdminController@show']);
Route::get('/phpinfo', ['as' => 'phpInfo', 'uses' => 'App\Http\Controllers\PhpinfoController@show']);
