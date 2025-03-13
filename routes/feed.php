<?php

use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

/**
 * Home
 */
Route::get('/', function () {
  return view('feed.home.index');
})->name('home.view');

/**
 * Popular
 */
Route::middleware([AuthMiddleware::class])->get('/popular', function () {
  return view('feed.popular.index');
})->name('popular.view');
