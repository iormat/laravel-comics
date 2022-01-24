<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.main-layout');
}) -> name('main-layout');

Route::get('/', function () {
    return view('pages.home');
}) -> name('home'); 

Route::get('test', function () {
    return view('pages.test');
}) -> name('test');
