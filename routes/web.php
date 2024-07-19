<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['layout' => ['title' => 'HOME', 'header' => "Home"]]);
});

Route::get('/about', function () {
    return view('about', ['layout' => ['title' => 'ABOUT', 'header' => "About"]]);
});

Route::get('/blog', function () {
    return view('blog', ['layout' => ['title' => 'BLOG', 'header' => "Blog"]]);
});

Route::get('/contact', function () {
    return view('contact', ['layout' => ['title' => 'CONTACT', 'header' => "Contact"]]);
});

Route::get('/credit', function () {
    return view('credit', ['layout' => ['title' => 'CREDIT', 'header' => "Credit"]]);
});