<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controlles\HomeController;

// Route::get('/', function () {
//      return view('welcome');
//});

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);


function () {
    return view('welcome');
};
