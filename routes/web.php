<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);


// Root URL → show students list
// Route::get('/', [StudentController::class, 'index']);

// // Resource routes for CRUD
// Route::resource('students', StudentController::class);

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

// college crud


use App\Http\Controllers\CollegeController;

Route::resource('colleges', CollegeController::class);


// routes/web.php


// Route::get('/contact', function() {
//     return view('contact'); // Blade file ka naam without .blade.php
// });

use App\Http\Controllers\TeacherController;

Route::get('/teachers', [TeacherController::class, 'index']);
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);



