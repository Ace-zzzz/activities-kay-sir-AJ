<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogToController;
use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');

Route::group(['prefix' => '/admin'], function()
{
    Route::resource('/home1', HomeController::class);

    Route::get('/home', [BlogsController::class, 'homePage'])->name('home');

    Route::get('/about', function()
    {
        $about = "This is about page";
        return view('common.about', compact('about'));
    })->name('aboutPage');

    Route::get('/contact', function()
    {
        return view('common.contact');
    })->name('contact');

    Route::get('/act2', function(){
        return view('layout.activity_2');
    });

    Route::get('/user/{id}/{name}', function($id, $name) {
        return "<a href='".route('settingsPage', ['id' => $id, 'name' => $name])."'>" ." 
                about 
                <a/>";
    });

    Route::get("settings/{id}/{name}", function($id, $name) {
        return $id . " " . $name;
    })->name('settingsPage'); 

    Route::get('/login', [LoginController::class,  'loginPage'])->name('login');
    Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');
    Route::get('/go', [LoginController::class,     'apiData']);

    // ACTIVITY 4 ROUTE
     Route::get('/home', [BlogsController::class, 'homePage'])->name('home');
    //
    Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');
    Route::get('/get-blogs', [BlogsController::class, 'getBlogsData']);
    Route::get('/insert-blogs', [BlogsController::class, 'insertdata']);
    Route::get('/update', [BlogsController::class, 'updateBlog']);
    Route::get('/getCategory', [BlogsController::class, 'getCategory']);
    Route::get('/getModel', [BlogsController::class, 'getBlogModel']);
    Route::get('/insertUsingModel', [BlogsController::class, 'insertUsingModel']);

    Route::get('/data', [BlogToController::class, 'data']);

    Route::get('/model-sample/{id}/{title}', [BlogsController::class, 'modelSample'])->name('blog.modelSample');
    
    Route::fallback(function()
    {
        return redirect(route('home'));
    });
});

Route::group(['middleware' => 'guest', 'prefix' => '/'], function(){
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'registerPost'])->name('register.create');

    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::post('/', [LoginController::class, 'loginPost'])->name('login.submit');
});

Route::group(['middleware' => ['custom.auth']], function(){ 
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => 'blog', 'middleware' => 'custom.auth'], function(){
    Route::get('/index', [BlogToController::class, 'index'])->name('index.create');
    Route::post('/index', [BlogToController::class, 'store'])->name('store');
});