<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display a list of all students (with optional search filter)
    public function index(Request $request)
    {
        $search = $request->input('search');

        $students = Student::when($search, function ($query, $search) {
            return $query->where('student_number', 'like', "%{$search}%")
                         ->orWhere('first_name', 'like', "%{$search}%")
                         ->orWhere('last_name', 'like', "%{$search}%")
                         ->orWhere('course', 'like', "%{$search}%");
        })->get();

        return view('students.index', compact('students', 'search'));
    }

    // Show the form to create a new student
    public function create()
    {
        return view('students.create');
    }

    // Store a new student record in the database
    public function store(Request $request)
    {
      $validated = $request->validate([
    'student_number' => 'required|unique:students',
    'first_name' => 'required',
    'last_name' => 'required',
    'email' => 'required|email|unique:students',
    'address' => 'required',
    'contact_number' => 'required',
    'course' => 'required',
    'year_level' => 'required',
]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    // Show the form for editing the specified student
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Update the specified student record in the database
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
    'student_number' => 'required|unique:students,student_number,' . $student->id,
    'first_name' => 'required',
    'last_name' => 'required',
    'email' => 'required|email|unique:students,email,' . $student->id,
    'address' => 'required',
    'contact_number' => 'required',
    'course' => 'required',
    'year_level' => 'required',
    'status' => 'required',
]);

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    // Remove the specified student record from the database
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}