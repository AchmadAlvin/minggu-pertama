<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat-datang-twin', function () {
    return view('selamatDatang');
});
