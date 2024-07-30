<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\FolderController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::redirect('/', '/folders/1/tasks');
Route::get('/folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/folders/create', [FolderController::class, "showCreateForm"]);
Route::post('/folders/create', [FolderController::class, "create"])->name('folders.createddd');
