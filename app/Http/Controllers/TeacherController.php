<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher; // ✅ Must match the model class name

class teacherController extends Controller
{
    public function index() {
        $teachers = Teacher::all(); // ✅ Use capital T to match model
        return view('teachers.index', compact('teachers')); // ✅ Pass variable to view
    }
}
