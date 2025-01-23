<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogToController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')
                      ->orderBy('created_at', 'desc')
                      ->simplePaginate(8);

        $categories = Category::all();

        return view('common.dropDown', compact('blogs', 'categories'));
    }

    public function data()
    {
        $category = Blog::with('category')->get();
        $category = Blog::with('category')->find(2);
        return $category;
    }
}
