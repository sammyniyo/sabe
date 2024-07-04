<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Home page route
Route::get('/', [PageController::class, 'index'])->name('home');

// Other page routes
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/software-training', [PageController::class, 'softwareTraining'])->name('software-training');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');
Route::get('/etabs', [PageController::class, 'etabs'])->name('etabs');
Route::get('/adobe-illustrator', [PageController::class, 'adobeIllustrator'])->name('adobe-illustrator');
Route::get('/adobe-photoshop', [PageController::class, 'adobePhotoshop'])->name('adobe-photoshop');
Route::get('/archicad', [PageController::class, 'archicad'])->name('archicad');
Route::get('/autocad', [PageController::class, 'autocad'])->name('autocad');
Route::get('/autodesk-revit', [PageController::class, 'autodeskRevit'])->name('autodesk-revit');
Route::get('/civil-3d', [PageController::class, 'civil3d'])->name('civil-3d');
Route::get('/lumion', [PageController::class, 'lumion'])->name('lumion');
Route::get('/prokon', [PageController::class, 'prokon'])->name('prokon');
Route::get('/sketchup', [PageController::class, 'sketchup'])->name('sketchup');
Route::get('/tekra-structures', [PageController::class, 'tekraStructures'])->name('tekra-structures');
Route::get('/twinmotion', [PageController::class, 'twinmotion'])->name('twinmotion');

// Student registration route
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// Contact form route
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

