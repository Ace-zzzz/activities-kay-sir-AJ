<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/act2', function(){
        return view('layout/activity_2');
    });

    Route::get('home', function() {
        return view('layout/master');
    })->name('home');

    Route::get('/user/{id}/{name}', function($id, $name) {
        return "<a href='".route('settingsPage', ['id' => $id, 'name' => $name])."'>" ." 
                about 
                <a/>";
    });

    Route::get('about', function() {
        return "about page";
    })->name('aboutPage');

    Route::get("settings/{id}/{name}", function($id, $name) {
        return $id . " " . $name;
    })->name('settingsPage'); 
});

Route::fallback(function()
{
    return redirect()->route('home');
});
