<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
        ]);

        // Create a new student record
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        // Send email to SABE
        Mail::to('sabeltdrw@gmail.com')->send(new \App\Mail\StudentRegistered($student));

        // Redirect back with success message
        return back()->with('success', 'Your slot has been booked successfully!');
    }
}
