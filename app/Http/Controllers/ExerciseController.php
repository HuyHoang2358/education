<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        return view('student.exam.index');
    }

    public function startTest(){

        return view('student.exam.test');

    }


    public function checkAnswer(Request $request){

        dd($request->all());

    }

}
