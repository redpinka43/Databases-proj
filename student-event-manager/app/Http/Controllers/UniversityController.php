<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index() {
        $universities = University::all();
        return view('universities')->with('universities', $universities);
    }   
}
