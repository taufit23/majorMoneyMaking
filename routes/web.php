<?php

use App\Http\Controllers\ModernNative\Public\BaseController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::resource('/', BaseController::class);
