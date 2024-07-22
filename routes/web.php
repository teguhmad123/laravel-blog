<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['layout' => ['title' => 'HOME', 'header' => "Home"]]);
});

Route::get('/about', function () {
    return view('about', ['layout' => ['title' => 'ABOUT', 'header' => "About"]]);
});

Route::get('/blog', function () {
    $data = [
                'layout' => ['title' => 'BLOG', 'header' => "Blog"],
                'posts' => Blog::all()
            ];
    return view('blog', $data);
});

Route::get('/blog/{slug}', function ($slug) {
    $data = Blog::find($slug);
    $data['layout'] = ['title' => 'BLOG', 'header' => "Blog"];
    return view('blog', $data);
});

Route::get('/contact', function () {
    return view('contact', ['layout' => ['title' => 'CONTACT', 'header' => "Contact"]]);
});

Route::get('/credit', function () {
    return view('credit', ['layout' => ['title' => 'CREDIT', 'header' => "Credit"]]);
});