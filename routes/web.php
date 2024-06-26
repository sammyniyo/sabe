<?php

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/about-us', [PageController::class, 'aboutUs']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/software-training', [PageController::class, 'softwareTraining']);
Route::get('/contact-us', [PageController::class, 'contactUs']);

