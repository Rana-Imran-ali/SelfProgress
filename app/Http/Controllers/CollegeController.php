<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colleges = College::all();
        return view('colleges.index', compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('colleges.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:colleges,email',
        ]);

        College::create($request->all());

        return redirect()->route('colleges.index')
                         ->with('success', 'College created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(College $college)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(College $college)
    {
        return view('colleges.edit', compact('college'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, College $college)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:colleges,email,' . $college->id,
        ]);

        $college->update($request->all());

        return redirect()->route('colleges.index')
                         ->with('success', 'College updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(College $college)
    {
        $college->delete();

        return redirect()->route('colleges.index')
                         ->with('success', 'College deleted successfully.');
    }
}
