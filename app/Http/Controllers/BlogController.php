<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('blog.index');
    }

    public function category(Category $category): View
    {
        return view('blog.category', compact('category'));
    }

    public function post(Post $post): View
    {
        return view('blog.single-post', compact('post'));
    }
}
