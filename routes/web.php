<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Indra Ganendra', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Indra Ganendra',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio debitis sequi officia asperiores doloremque quisquam, perferendis sapiente eos fugiat corporis earum? Non reprehenderit minima aliquam dolorum alias repellat dolores culpa!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Indra Ganendra',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem vel blanditiis nesciunt modi dolore, officiis pariatur quia minus sint magni, a cupiditate rem laboriosam. Doloribus ex officia iste iusto illum.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Indra Ganendra',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio debitis sequi officia asperiores doloremque quisquam, perferendis sapiente eos fugiat corporis earum? Non reprehenderit minima aliquam dolorum alias repellat dolores culpa!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Indra Ganendra',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem vel blanditiis nesciunt modi dolore, officiis pariatur quia minus sint magni, a cupiditate rem laboriosam. Doloribus ex officia iste iusto illum.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});