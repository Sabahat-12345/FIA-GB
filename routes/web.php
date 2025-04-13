<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterSubscriberController;
use App\Http\Controllers\ComplainController;

Route::get('/', function () {
    return view('home');
})->name('home');
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

Route::post('/subscribe', [NewsletterSubscriberController::class, 'subscribe'])->name('subscribe');


Route::get('/complain', function () {
    return view('complain');
})->name('complain');

Route::post('/complain', [ComplainController::class, 'store'])->name('complaint.store');


Route::get('/cell', function () {
    return view('cell');
})->name('cell');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/act', function () {
    return view('act');
})->name('act');