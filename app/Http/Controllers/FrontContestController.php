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

}
