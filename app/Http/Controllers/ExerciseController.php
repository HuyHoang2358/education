<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        return view('student.exam.index');
    }

    public function startTest($type = null){

        return view('student.exam.test', ['type' => $type]);

    }


    public function checkAnswer(Request $request){

        dd($request->all());

    }

}
