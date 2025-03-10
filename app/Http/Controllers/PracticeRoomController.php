<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PracticeRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // if (!Auth::check()) {
        //     return redirect()->route('not.login');
        // }
        return view('student.practice_room.index');
    }

    public function rank(){
        
        return view('student.practice_room.rank');

    }

    public function detail(){

        return view('student.practice_room.detail');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
