<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyCodeMail;

class StudentsController extends Controller
{
    public function index()
    {
        return view('student.dashboard');
    }

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
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
            'phone' => $request->phone,
            'address' => $request->address,
            'edclevel' => $request->edclevel,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender ?? 'on' == 'on' ? 1 : 0, // Convert 'on' to 1 and null to 0
            'notes' => $request->notes,
        ]);
        
        // Redirect to the student dashboard with a success message
        redirect()->route('student.dashboard')->with('success', 'Student registered successfully!');

        $this->sendVerification($request);
    }

    public function login_student(Request $request)
    {
        $credentials = $request->only('email', 'password');


        if (Auth::guard(name: 'student')->attempt($credentials)) {
            return redirect()->intended('student/dashboard');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect('/student/login')->with('success', 'Logged out successfully');
    }
    public function sendVerification(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:students,email',
        ]);

        $student = Student::where('email', $request->email)->first();
        if ($student) {
            Mail::to($request->email)->send(new VerifyCodeMail('123'));
        }

        return back()->withErrors(['email' => 'Email not found']);
    }
}
