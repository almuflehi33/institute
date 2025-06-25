<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeachersController extends Controller
{

    public function index()
    {
        return view('teacher.dashboard');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'nullable|string|max:15',
            'qualification' => 'nullable|string|max:255',
            'subjects' => 'nullable|string|max:255',
            'gender' => 'nullable|string',
            'notes' => 'nullable|string|max:500',
        ]);
        // Create a new teacher record
        $teacher = Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
            'phone' => $request->phone,
            'qualification' => $request->qualification,
            'subjects' => $request->subjects,
            'gender' => $request->gender ?? 'on' == 'on' ? 1 : 0, // Convert 'on' to 1 and null to 0
            'notes' => $request->notes,
        ]);
        // Redirect to the student dashboard with a success message
        return redirect()->route('teacher.dashboard')->with('success', 'Teacher registered successfully!');
    }

    public function login_teacher(Request $request)
    {
        $credentials = $request->only('email', 'password');


        if (Auth::guard(name: 'teacher')->attempt($credentials)) {
            return redirect()->intended('teacher/dashboard');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('teacher')->logout();
        return redirect('/teacher/login')->with('success', 'Logged out successfully');
    }
}
