<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechController extends Controller
{
    public function index(){
        return response()->json(Tech::all(), 200);
    }
}
