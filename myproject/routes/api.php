<?php

use App\Http\Controllers\BookApiController;
use App\Http\Controllers\BookRestController;
use App\Http\Controllers\BookRpcController;
use App\Http\Controllers\BookSacController;
use Illuminate\Support\Facades\Route;

Route::post('/rpc/books/{id}/borrow', [BookRpcController::class, 'borrowBook']);
Route::post('/rpc/books/{id}/return', [BookRpcController::class, 'returnBook']);

Route::get('/sac/books/{id}', BookSacController::class);

Route::prefix('rest')->group(function () {
    Route::get('/books', [BookRestController::class, 'index']);
    Route::get('/books/{id}', [BookRestController::class, 'show']);
    Route::post('/books', [BookRestController::class, 'store']);
    Route::put('/books/{id}', [BookRestController::class, 'update']);
    Route::delete('/books/{id}', [BookRestController::class, 'destroy']);
    Route::get('/books/create', [BookRestController::class, 'create']);
    Route::get('/books/{id}/edit', [BookRestController::class, 'edit']);
});

Route::prefix('restapi')->group(function () {
    Route::get('/books', [BookRestController::class, 'index']);
    Route::get('/books/{id}', [BookRestController::class, 'show']);
    Route::post('/books', [BookRestController::class, 'store']);
    Route::put('/books/{id}', [BookRestController::class, 'update']);
    Route::delete('/books/{id}', [BookRestController::class, 'destroy']);
});
