<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // ✅ Import the Student model

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all(); // Fetch all students
        return view('students.index', compact('students')); // Send data to view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create'); // Show form page
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:students,email',
            'age'   => 'required|integer'
        ]);

        Student::create($request->all()); // Save data

        return redirect()->route('students.index')
                         ->with('success', 'Student added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:students,email,' . $id,
            'age'   => 'required|integer'
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('students.index')
                         ->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')
                         ->with('success', 'Student deleted successfully');
    }
}
