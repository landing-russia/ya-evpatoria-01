<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcursionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/excurtions', function () {
    return view('welcome2');
});

Route::get('/excursions', [ExcursionController::class, 'index']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
