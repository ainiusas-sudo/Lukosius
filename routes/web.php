<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::post('/login', [WelcomeController::class, 'login'])->name('login');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Task routes
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
Route::post('/tasks/{task}/increment', [TaskController::class, 'increment'])->name('tasks.increment');
Route::post('/tasks/{task}/decrement', [TaskController::class, 'decrement'])->name('tasks.decrement');

// Progress route
Route::get('/progress', [ProgressController::class, 'index'])->name('progress.index');

// FAQ route
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
