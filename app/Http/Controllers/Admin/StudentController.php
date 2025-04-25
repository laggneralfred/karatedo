<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Inertia\Inertia;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('last_name')->get();

        return Inertia::render('Admin/Students/Index', [
            'students' => $students,
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Students/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:students',
            'phone'      => 'nullable',
            'date_joined' => 'required|date',
        ]);

        Student::create($request->all());

        return redirect()->route('admin.students.index')->with('success', 'Student added!');
    }

    public function show(Student $student)
{
    return Inertia::render('Admin/Students/Show', [
        'student' => $student,
    ]);
}

}

