<?php

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/about-us', [PageController::class, 'aboutUs']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/software-training', [PageController::class, 'softwareTraining']);
Route::get('/contact-us', [PageController::class, 'contactUs']);
Route::get('/etabs', [PageController::class, 'etabs']);
Route::get('/adobe-illustrator', [PageController::class, 'adobe-illustrator']);
Route::get('/adobe-photoshop', [PageController::class, 'adobe-photoshop']);
Route::get('/archicad', [PageController::class, 'archicad']);
Route::get('/autocad', [PageController::class, 'autocad']);
Route::get('/autodesk-revit', [PageController::class, 'autodesk-revit']);
Route::get('/civil-3d', [PageController::class, 'civil-3d']);
Route::get('/lumion', [PageController::class, 'lumion']);
Route::get('/prokon', [PageController::class, 'prokon']);
Route::get('/sketchup', [PageController::class, 'sketchup']);
Route::get('/tekra-structure', [PageController::class, 'tekra-structure']);
Route::get('/twinmotion', [PageController::class, 'twinmotion']);

use App\Http\Controllers\StudentController;

Route::post('/students', [StudentController::class, 'store'])->name('students.store');


