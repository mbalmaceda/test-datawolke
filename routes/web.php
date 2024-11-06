<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'show']);
// Route::get('/user', [UserController::class, 'index']);



