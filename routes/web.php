<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/pages/Home');
});

Route::get('/load', function () {
    return view('/pages/Load');
});

Route::get('/record', function () {
    return view('/pages/Record');
})->name('record');
