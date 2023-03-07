<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Edo Handoko',
        'email' => 'edohandoko@gmail.com',
        'image' => 'edo.jpg'
    ]);
});

Route::get('/blog', [PostController::class, 'show']);

Route::get('posts/{post:slug}', [PostController::class, 'index']);
