<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentRegistrationMail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // Create a new student record
            $student = Student::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);

            // Send registration email to the organization
            Mail::to('sabeltdrw@gmail.com')->send(new StudentRegistrationMail($student));

            // Send welcome email to the student
            Mail::to($student->email)->send(new WelcomeMail($student));

            // Flash success message
            return redirect()->back()->with('success', 'Registration successful. A welcome email has been sent to your email address.');

        } catch (\Exception $e) {
            // Flash failure message
            return redirect()->back()->with('error', 'An error occurred while processing your request. Please try again later.');
        }
    }
}
