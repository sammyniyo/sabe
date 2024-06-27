<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
        ]);

        $student = new Student([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        $student->save();

        // Send email to SABE
        Mail::send('emails.registration', ['student' => $student], function ($m) use ($student) {
            $m->from('sabeltdrw@gmail.com', 'SABE Ltd');
            $m->to('sabeltdrw@gmail.com', 'SABE')->subject('New Student Registration');
        });

        return redirect()->back()->with('success', 'Registration successful. We will contact you soon.');
    }
}
