<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        return view('student.exercise.index');
    }

    public function startTest(){

        return view('student.exercise.test');

    }


    public function checkAnswer(Request $request){
        
        dd($request->all());

    }

}
