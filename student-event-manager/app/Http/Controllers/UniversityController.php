<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;

class UniversityController extends Controller
{
    public function index() {
        $universities = University::all();
        return view('universities')->with('universities', $universities);
    }   

    public function getUniName (Request $request) {
        $uniName = $request->user()->uni_name;
        return view('home')->with('uniName', $uniName);
    }
}
