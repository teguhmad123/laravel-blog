<?php

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
                'posts' => [
                    [
                        'slug' => 'diduga-kesal-dijadikan-becandaan-seorang-pemuda-mencoba-sukarela-melawak',
                        'title' => 'Diduga kesal dijadikan becandaan, seorang pemuda mencoba sukarela melawak',
                        'author' => 'Teguh',
                        'date' => '19/07/2024',
                        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis porro error ad, facere optio, molestias consequuntur at sequi mollitia cumque libero accusantium ipsum quo cum asperiores minima laudantium quibusdam deleniti.'
                    ],
                    [
                        'slug' => 'jenuh-bekerja-support-it-berubah-menjadi-support-system',
                        'title' => 'Jenuh bekerja, support IT berubah menjadi support system',
                        'author' => 'Teguh',
                        'date' => '19/07/2024',
                        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo et recusandae tenetur debitis explicabo ut deleniti porro, laudantium dignissimos magni velit dolorum, quisquam distinctio harum tempore mollitia quos, commodi provident.'
                    ],
                ]
            ];
    return view('blog', $data);
});

Route::get('/blog/{slug}', function ($slug) {
    $posts = [
                [
                    'slug' => 'diduga-kesal-dijadikan-becandaan-seorang-pemuda-mencoba-sukarela-melawak',
                    'title' => 'Diduga kesal dijadikan becandaan, seorang pemuda mencoba sukarela melawak',
                    'author' => 'Teguh',
                    'date' => '19/07/2024',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis porro error ad, facere optio, molestias consequuntur at sequi mollitia cumque libero accusantium ipsum quo cum asperiores minima laudantium quibusdam deleniti.'
                ],
                [
                    'slug' => 'jenuh-bekerja-support-it-berubah-menjadi-support-system',
                    'title' => 'Jenuh bekerja, support IT berubah menjadi support system',
                    'author' => 'Teguh',
                    'date' => '19/07/2024',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo et recusandae tenetur debitis explicabo ut deleniti porro, laudantium dignissimos magni velit dolorum, quisquam distinctio harum tempore mollitia quos, commodi provident.'
                ],
            ];
    $data = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    $data['layout'] = ['title' => 'BLOG', 'header' => "Blog"];
    return view('blog', $data);
});

Route::get('/contact', function () {
    return view('contact', ['layout' => ['title' => 'CONTACT', 'header' => "Contact"]]);
});

Route::get('/credit', function () {
    return view('credit', ['layout' => ['title' => 'CREDIT', 'header' => "Credit"]]);
});