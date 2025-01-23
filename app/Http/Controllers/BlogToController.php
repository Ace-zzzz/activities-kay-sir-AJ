<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogToController extends Controller
{
    public function data()
    {
        $blogs = Blog::with('category')->get();

        return $blogs;
    }
}
