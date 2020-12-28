<?php

use App\Http\Controllers\ExcursionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/excursions', [ExcursionController::class, 'index']);

Route::view('/foods', 'foods.index');
Route::view('/residences', 'residences.index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
