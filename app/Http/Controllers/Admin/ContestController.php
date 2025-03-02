<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contest;
use App\Models\Exam;
use Illuminate\Http\Request;

class ContestController extends Controller
{
    /**
     * Display a listing of contests.
     */
    public function index()
    {
        $contests = Contest::with('exam')->paginate(10);
        return view('admin.contests.index', compact('contests'));
    }

    /**
     * Show the form for creating a new contest.
     */
    public function create()
    {
        $exams = Exam::all();

        return view('admin.contests.create', compact('exams'));
    }

    /**
     * Store a newly created contest in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('contest_images', 'public');
        }

        Contest::create($data);

        return redirect()->route('contests.index')->with('success', 'Cuộc thi đã được tạo thành công.');
    }

    /**
     * Display the specified contest.
     */
    public function show(Contest $contest)
    {
        return view('admin.contests.show', compact('contest'));
    }

    /**
     * Show the form for editing the specified contest.
     */
    public function edit(Contest $contest)
    {
        $exams = Exam::all();

        return view('admin.contests.edit', compact('contest', 'exams'));
    }

    /**
     * Update the specified contest in storage.
     */
    public function update(Request $request, Contest $contest)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('contest_images', 'public');
        }

        $contest->update($data);

        return redirect()->route('contests.index')->with('success', 'Cập nhật cuộc thi thành công.');
    }

    /**
     * Remove the specified contest from storage.
     */
    public function destroy(Contest $contest)
    {
        $contest->delete();
        return redirect()->route('contests.index')->with('success', 'Cuộc thi đã được xóa.');
    }
}
