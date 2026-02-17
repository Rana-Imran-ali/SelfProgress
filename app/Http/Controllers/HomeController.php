<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $showMessage = true;
        $message = "This is a simple Blade example!";
        $users = ['Imran', 'Ali', 'Sara'];

        return view('home', compact('showMessage', 'message', 'users'));
    }
}
