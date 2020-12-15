<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo', function () {
    return view('welcome2');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
