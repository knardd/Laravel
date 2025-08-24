<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => "Blog", "posts" => post::all() ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
        return view('posts', ['title' => 'artikel dari'. $user->name, 'posts' => $user->posts]);
});

Route::get('/category/{category:slug}', function (Category $category) {
        return view('posts', ['title' => 'artikel dari'. $category->name, 'posts' => $category->posts]);
});

Route::get('/about', function () {
    $teams= Team::all();
    return view('about', ["title" => "About Page", 'teams' => $teams]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => "Contact"]);
});
