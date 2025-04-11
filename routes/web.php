<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/header_section', function () {
    return view('header_section');
})->name('header_section');

Route::get('/navbar', function () {
    return view('navbar');
})->name('navbar');

Route::get('/slider', function () {
    return view('slider');
})->name('slider');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/key_functional', function () {
    return view('key_functional');
})->name('key_functional');

Route::get('/footer', function () {
    return view('footer');
})->name('footer');
