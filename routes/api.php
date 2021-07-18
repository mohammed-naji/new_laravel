<?php

use App\Http\Controllers\API\PostController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('posts', [PostController::class, 'index']);

Route::post('posts', [PostController::class, 'store']);

Route::put('posts/update/{id}', [PostController::class, 'update']);

Route::delete('posts/delete/{id}', [PostController::class, 'delete']);

Route::post('posts/search', [PostController::class, 'search']);

Route::post('posts/search2', [PostController::class, 'search2']);
