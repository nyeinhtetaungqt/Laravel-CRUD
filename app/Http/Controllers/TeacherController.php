<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', ['teachers' => $teachers]);
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'subject' => 'required'
        ]);

        $newTeacher = Teacher::create($data);
        return redirect(route('teacher.index'));
    }

    public function edit(Teacher $teachers)
    {
        return view('teachers.edit', ['teachers' => $teachers]);
    }

    public function update(Teacher $teachers, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'subject' => 'required'
        ]);
        $teachers->update($data);
        return redirect(route('teacher.index'))->with('success', 'Update successfully');
    }

    public function delete(Teacher $teachers)
    {
        $teachers->delete();
        return redirect(route('teacher.index'))->with('success', 'Deleted successfully');
    }
}
