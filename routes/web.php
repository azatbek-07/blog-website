<?php

use Illuminate\Support\Facades\Route;

// Home sahifa - to'g'ridan-to'g'ri view qaytaradi
Route::get('/', function () {
    return view('home');
})->name('home');

// About sahifa
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact sahifa
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Blog sahifa
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Bitta maqola
Route::get('/post/{slug}', function ($slug) {
    return view('post');
})->name('posts.show');