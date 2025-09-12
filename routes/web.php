<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/selamat-datang-twin', function () {
    return view('selamatDatang');
});
