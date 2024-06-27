<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Student;

class StudentRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function build()
    {
        return $this->view('emails.student_registered')
                    ->with([
                        'name' => $this->student->name,
                        'email' => $this->student->email,
                        'phone' => $this->student->phone,
                        'address' => $this->student->address,
                    ]);
    }
}
