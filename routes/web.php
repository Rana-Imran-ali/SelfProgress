<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Root URL → show students list
Route::get('/', [StudentController::class, 'index']);

// Resource routes for CRUD
Route::resource('students', StudentController::class);
