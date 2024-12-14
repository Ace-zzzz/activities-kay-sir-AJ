<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BlogsController extends Controller
{
    public function index()
    {
        Log::debug("===========> Start debug");
        Log::info("============> Start info");
        Log::notice("==========> Start notice");
        Log::warning("=========> Start warning");
        Log::error("===========> Start error");
        Log::critical("========> Start critical");
        Log::alert("===========> Start alert");
        Log::emergency("=======> Start emergency");

        $blogs = Blog::simplePaginate(8);

        Log::info("=========> End");
        return view('common.blogs', compact('blogs'));
    }

    public function getBlogsData()
    {
        $result = DB::table('blogs')->pluck('title');
        
        return compact('result');
    }

    public function insertData()
    {
        $result = DB::table('blogs')->insert([
            'id' => 7,
            'title' => 'Kamusta kana',
        ]);
        
        return $result ? 'succesfull' : 'hindi success';
    }
}
