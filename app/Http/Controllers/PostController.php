<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show(){
        return view('posts', [
            'title' => 'Posts',
            'posts' => Post::all()
        ]);
    }

    public function index(Post $post){
        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}
