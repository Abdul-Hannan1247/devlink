<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomeController:: class, 'index']);
Route::get('/about', [ HomeController:: class,'showAboutPage']);
Route::get('/single-action',SingleController::class);
// Route::resource('/blog', BlogController::class);
Route::get('/blog', function(){
    $blogs = Blog::all();
    dd($blogs);
});
