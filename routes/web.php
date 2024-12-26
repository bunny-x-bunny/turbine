<?php

use Illuminate\Support\Facades\Route;

Route::middleware(\App\Http\Middleware\Localization::class)->group(function() {
  Route::get('/', fn() => view('home'))->name('home');
  Route::get('/about', fn() => view('about'))->name('about');
  Route::get('/projects', fn() => view('projects'))->name('projects');
  Route::get('/stats', fn() => view('stats'))->name('stats');
  Route::get('/contact', fn() => view('contact'))->name('contact');
  Route::get('/news', fn() => view('news'))->name('news');
  Route::get('/invest', fn() => view('invest'))->name('invest');
});

Route::get('/language/{locale}', function ($locale) {
    if(!in_array($locale, array_values(config('app.available_locales'))))
      abort(404);

    app()->setLocale($locale);
    session(['locale' => $locale]);
    return redirect()->back();
});
