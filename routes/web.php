<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;

Route::get( uri: '/', action: Controllers\HomeController::class);

Route::get( uri: '/about', action: Controllers\AboutController::class);

Route::get( uri: '/contact', action: Controllers\ContactController::class);

Route::get( uri: '/gallery', action: Controllers\GalleryController::class);

