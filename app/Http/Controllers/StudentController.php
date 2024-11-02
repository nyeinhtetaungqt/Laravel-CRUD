<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function create()
    {
        return view('students.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $newStudent = Student::create($data);
        return redirect(route('student.index'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', ['student' => $student]);
    }

    public function update(Student $student, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $student->update($data);
        return redirect(route('student.index'))->with('success', 'updated successfully');
    }

    public function delete(Student $student)
    {
        $student->delete();
        return redirect(route('student.index'))->with('success', 'Deleted successfully');
    }
}
