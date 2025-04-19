<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterSubscriberController;
use App\Http\Controllers\ComplainController;

// Route::get('/', function () {
//     return view('about');
// })->name('home');
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/header_section', function () {
    return view('partial.header_section');
})->name('header_section');

Route::get('/navbar', function () {
    return view('partial.navbar');
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
    return view('partial.footer');
})->name('footer');

Route::post('/subscribe', [NewsletterSubscriberController::class, 'subscribe'])->name('subscribe');


Route::get('/complain', function () {
    return view('complain');
})->name('complain');

Route::post('/complain', [ComplainController::class, 'store'])->name('complaint.store');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/act', function () {
    return view('act');
})->name('act');

Route::get('/public_portal', function () {
    return view('public_portal');
})->name('public_portal');

Route::get('/wings', function () {
    return view('wings');
})->name('wings');

Route::get('/anti-corruption', function () {
    return view('anti-corruption');
})->name('anti-corruption');

Route::get('/anti-human-trafficking', function () {
    return view('anti-human-trafficking');
})->name('anti-human-trafficking');

Route::get('/counter-terrorism', function () {
    return view('counter-terrorism');
})->name('counter-terrorism');

Route::get('/cyber-crime', function () {
    return view('cyber-crime');
})->name('cyber-crime');

Route::get('/economic-crime', function () {
    return view('economic-crime');
})->name('economic-crime');

Route::get('/important_links', function () {
    return view('important_links');
})->name('important_links');

Route::get('/travel_instructions', function () {
    return view('travel_instructions');
})->name('travel_instructions');

Route::get('/fia_acadamy', function () {
    return view('fia_acadamy');
})->name('fia_acadamy');

Route::get('/law', function () {
    return view('law');
})->name('law');

Route::get('/technical', function () {
    return view('technical');
})->name('technical');

Route::get('/immigration', function () {
    return view('immigration');
})->name('immigration');

Route::get('/interpol', function () {
    return view('interpol');
})->name('interpol');

Route::get('/intellectual-property', function () {
    return view('intellectual-property');
})->name('intellectual-property');