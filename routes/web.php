<?php

use App\Models\Message;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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
    return inertia('Hello');
});

Route::get('/contact', function () {
    return inertia('Contact');
});

Route::get('/messages', function () {
    $messages = Message::all();
    return inertia('Messages', ['messages' => $messages]);
});

Route::post('messages', function (Request $request) {
    $validated = $request->validate([
        'text' => 'required|min:50'
    ]);
    Message::create($validated);
    return redirect('messages');
});
