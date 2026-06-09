<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::livewire('/home', 'home');
Route::livewire('/test', 'test');
