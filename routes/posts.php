
<?php

use App\Http\Controllers\PostController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

/**
 * Create New Post View
 */
Route::middleware([AuthMiddleware::class])->get(
  '/posts/create/{id}',
  [PostController::class, 'create']
)->whereNumber('id')->name('posts.create.view');
