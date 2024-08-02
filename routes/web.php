<?php

use App\Http\Controllers\PostsController; // to define resource routes  for posts
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
* creates multiple routes, handling CRUD (Create, Read, Update, and Delete) operations
* for the Posts resource
* URLS:
* /posts               (GET)
* /posts/create        (GET)
* /posts               (POST)
# /posts/{posts}       (GET)
* /posts/{posts}/edit  (GET)
* ...
*/
Route::resource('posts', PostsController::class);
