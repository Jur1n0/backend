<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/profile/create');

Route::get('/profile/create', [ProfileController::class, 'showForm']);
Route::post('/profile/result', [ProfileController::class, 'processForm']);
Route::get('/test/create', function () {
    return view('test.showForm');
});
