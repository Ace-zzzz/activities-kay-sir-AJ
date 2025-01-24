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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);

        Blog::create($validatedData);

        return redirect()->route('index')->with('success', 'Blog created successfully.');
    }
}