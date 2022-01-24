<?php

use Illuminate\Support\Facades\Route;
use App\HomeController;

Route::get('/', function () {
    return view('layouts.main-layout');
}) -> name('main-layout');

Route::get('/', 'HomeController@home') -> name('home');
Route::get('test', 'HomeController@test') -> name('test');
