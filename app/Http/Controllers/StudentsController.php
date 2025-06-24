<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function index()
    {
        return view('student.dashboard');
    }

    public function create() {}

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'edclevel' => 'nullable|string|max:50',
            'birthdate' => 'nullable|date',
            'gender' => 'nullable|string',
            'notes' => 'nullable|string|max:500',
        ]);
        // Create a new student record
        $student = DB::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
            'phone' => $request->phone,
            'address' => $request->address,
            'edclevel' => $request->edclevel,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender??'on' == 'on'?1:0, // Convert 'on' to 1 and null to 0
            'notes' => $request->notes,
        ]);
        // Redirect to the student dashboard with a success message
        return redirect()->route('student.dashboard')->with('success', 'Student registered successfully!');
    }
}
