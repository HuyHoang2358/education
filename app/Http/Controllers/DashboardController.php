<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('student.index');
    }

    public function x(){
        return view('student.x');
    }
}

