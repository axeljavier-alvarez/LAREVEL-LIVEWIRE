<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowPosts;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// dashboard
Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::middleware(['auth'])->get('/dashboard',  ShowPosts::class)->name('dashboard');

