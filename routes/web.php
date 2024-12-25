<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/projects', fn() => view('projects'))->name('projects');
Route::get('/stats', fn() => view('stats'))->name('stats');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/news', fn() => view('news'))->name('news');
Route::get('/invest', fn() => view('invest'))->name('invest');
