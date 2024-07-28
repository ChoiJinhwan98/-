<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::redirect('/', '/folders/1/tasks');
Route::get('/folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');
