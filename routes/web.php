<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Root URL → show students list
// Route::get('/', [StudentController::class, 'index']);

// // Resource routes for CRUD
// Route::resource('students', StudentController::class);

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);


// routes/web.php


// Route::get('/contact', function() {
//     return view('contact'); // Blade file ka naam without .blade.php
// });

use App\Http\Controllers\TeacherController;

Route::get('/teachers', [TeacherController::class, 'index']);
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);

