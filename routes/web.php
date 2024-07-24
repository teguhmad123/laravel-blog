<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
                'posts' => Post::with(['author', 'category'])->get()
            ];
    return view('blog', $data);
});

Route::get('/blog/{post:slug}', function (Post $post) {
    $data['layout'] = ['title' => 'BLOG', 'header' => "Blog"];
    $data['post'] = $post;
    return view('blog', $data);
});

Route::get('/blog/author/{user:username}', function (User $user) {
    $data = [
                'layout' => ['title' => 'BLOG', 'header' => 'Blog by '.$user->name],
                'posts' => $user->posts
            ];
    return view('blog', $data);
});

Route::get('/blog/category/{category:slug}', function (Category $category) {
    $data = [
                'layout' => ['title' => 'BLOG', 'header' => 'Blog in '.$category->name],
                'posts' => $category->posts
            ];
    return view('blog', $data);
});

Route::get('/contact', function () {
    return view('contact', ['layout' => ['title' => 'CONTACT', 'header' => "Contact"]]);
});

Route::get('/credit', function () {
    return view('credit', ['layout' => ['title' => 'CREDIT', 'header' => "Credit"]]);
});