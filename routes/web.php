<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('contact-the-gwapo', function(){
    return view('contact');
})->name('contact');
Route::get('ABOUT-THE-GWAPO', function(){
    return view('about');
})->name('about');
