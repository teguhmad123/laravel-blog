<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'HOME', 'header' => "Home"]);
});

Route::get('/about', function () {
    return view('about');
});

// blog
// artikel, judul, isi
Route::get('/blog', function () {
    return view('blog');
});

// contact
// email, sosmed
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/credit', function () {
    return view('credit');
});