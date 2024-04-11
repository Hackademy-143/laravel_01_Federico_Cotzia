<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/pag1', function () {
    return view('pag1');
});

Route::get('/pag2', function () {
    return view('pag2');
});