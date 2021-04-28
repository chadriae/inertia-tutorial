<?php

use App\Models\Message;
use Illuminate\Support\Facades\Route;

// laravel monolith way
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $messages = Message::all();
    return view('about', ['messages' => $messages]);
});


// laravel inertia way
Route::get('/hello', function () {
    $messages = Message::all();
    return inertia('Hello', ['messages' => $messages]);
});

Route::get('/contact', function () {
    return inertia('Contact');
});
