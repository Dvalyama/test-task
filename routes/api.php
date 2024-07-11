<?php

use App\Http\Controllers\Api\ApiPostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::prefix('api')->group(function () {

   
    Route::middleware('auth:sanctum')->get('posts', [ApiPostController::class, 'index'])->name('api.posts');
    Route::middleware('auth:sanctum')->get('posts/{post}', [ApiPostController::class, 'show'])->name('api.post.show');
    Route::middleware('auth:sanctum')->post('/posts', [ApiPostController::class, 'store'])->name('api.posts.edit');
    Route::middleware('auth:sanctum')->put('/posts/{id}', [ApiPostController::class, 'update'])->name('api.posts.update');
    Route::middleware('auth:sanctum')->delete('/posts/{id}', [ApiPostController::class, 'delete'])->name('api.  posts.delete');

});
