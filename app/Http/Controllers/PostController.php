<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('posts.index',[
            'posts' => Post::latest()->filter(request(['search']))->get(),
            'categories' => $categories
        ]);
    }

    public function view(Post $post)
    {
        return view('posts.view', [
            'post' => $post
        ]);
    }
}
