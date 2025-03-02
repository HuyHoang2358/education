<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::latest()->paginate(10);
        return view('admin.exams.index', compact('exams'));
    }

    public function create()
    {
        $subjects = Category::where('type', 'subject')->get();

        return view('admin.exams.create', compact('subjects'));
    }

    public function store(Request $request)
    {
        $filePath = $request->file('file')->store('exams', 'public');

        Exam::create([
            'title' => $request->title,
            'file' => $filePath,
            'subject_id' => $request->subject_id,
            'year' => $request->year,
            'rating' => $request->rating,
            'province' => $request->province,
            'slug' => Str::slug($request->title, '-'),
        ]);

        return redirect()->route('exams.index')->with('success', 'Đề thi đã được thêm thành công.');
    }


    public function edit(Exam $exam)
    {
        $subjects = Category::where('type', 'subject')->get();
        return view('admin.exams.edit', compact('exam', 'subjects'));
    }

    public function update(Request $request, Exam $exam)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'nullable|mimes:pdf|max:2048',
            'subject_id' => 'required|exists:categories,id',
            'year' => 'required|integer',
            'province' => 'required|string',
        ]);

        if ($request->hasFile('file')) {
            Storage::disk('public')->delete($exam->file);
            $filePath = $request->file('file')->store('exams', 'public');
        } else {
            $filePath = $exam->file;
        }

        $exam->update([
            'title' => $request->title,
            'file' => $filePath,
            'subject_id' => $request->subject_id,
            'year' => $request->year,
            'rating' => $request->rating,
            'province' => $request->province,
            'slug' => Str::slug($request->title, '-'),
        ]);

        return redirect()->route('exams.index')->with('success', 'Đề thi đã được cập nhật.');
    }

    public function destroy(Exam $exam)
    {
        Storage::disk('public')->delete($exam->file);
        $exam->delete();
        return redirect()->route('exams.index')->with('success', 'Đề thi đã được xóa.');
    }
}