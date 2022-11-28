<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/categorybook', function () {
    return view('categorybook');
});

Route::get('/publishers', function () {
    return view('publisher');
});

Route::get('/categorybook/{id}', [PostController::class, "searchcategory"]);

Route::get('/bookdetail/{id}', [PostController::class, "searchbook"]);

Route::get('/publishersdetail/{id}', [PostController::class, "searchpublisher"]);
