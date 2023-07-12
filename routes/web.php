<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/sobre', [AboutController::class, 'about'])->name('about');
Route::get('/contato', [ContactController::class, 'contact'])->name('contact');
