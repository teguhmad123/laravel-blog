<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Blog {
    public static function all() : array {
        return [
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
    }

    public static function find($slug) : array {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(!$post) abort(404);

        return $post;
    }
}