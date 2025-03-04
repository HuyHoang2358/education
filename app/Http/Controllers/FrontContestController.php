<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontContestController extends Controller
{
    public function index(){

        return view('student.contest.index');

    }

    public function detail($slug){

        return view('student.contest.detail', ['slug' => $slug]);

    }

    public function rank($slug){

        return view('student.contest.rank', ['slug' => $slug]);

    }

}
