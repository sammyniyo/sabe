<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function services()
    {
        return view('services');
    }

    public function softwareTraining()
    {
        return view('software-training');
    }

    public function contactUs()
    {
        return view('contact-us');
    }
}
