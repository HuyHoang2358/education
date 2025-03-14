<?php

namespace App\Http\Controllers;

class SurveyController extends Controller
{
    public function first()
    {
        return view('survey.first');
    }
    public function second()
    {
        return view('survey.second');
    }
    public function third()
    {
        return view('survey.third');
    }
    public function fourth()
    {
        return view('survey.fourth');
    }
}
