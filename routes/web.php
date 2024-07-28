<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/2', function () {
    return view('welcome');
});
Route::redirect('/', '/dashboard');
Route::view('/dashboard', 'dashboard');
