<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbroadController extends Controller
{
    public function index()
    {
        return view('student.abroad.index');
    }
}
