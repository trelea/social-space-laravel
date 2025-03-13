<?php

use App\Http\Controllers\CategoryController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

/**
 * All Categories
 */
Route::middleware([AuthMiddleware::class])->get(
  '/categories',
  [CategoryController::class, 'index']
)->name('categories.index.view');

/**
 * Select What Type Of Post To Create
 */
Route::middleware([AuthMiddleware::class])->get(
  '/categories/create',
  [CategoryController::class, 'create']
)->name('categories.create.view');

/**
 * All Categories
 */
Route::middleware([AuthMiddleware::class])->get(
  '/categories/{id}',
  [CategoryController::class, 'show']
)->whereNumber('id')->name('categories.show.view');
