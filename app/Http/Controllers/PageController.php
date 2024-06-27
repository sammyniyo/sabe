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
    public function etabs()
    {
        return view('etabs');
    }
    public function adobeIllustrator()
    {
        return view('adobe-illustrator');
    }
    public function adobePhotoshop()
    {
        return view('adobe-photoshop');
    }
    public function archicad()
    {
        return view('archicad');
    }
    public function autocad()
    {
        return view('autocad');
    }
    public function autodeskRevit()
    {
        return view('autodesk-revit');
    }
    public function civil3d()
    {
        return view('civil-3d');
    }
    public function lumion()
    {
        return view('lumion');
    }
    public function prokon()
    {
        return view('prokon');
    }
    public function sketchup()
    {
        return view('sketchup');
    }
    public function tekraStructures()
    {
        return view('tekra-structures');
    }
    public function twinmotion()
    {
        return view('twinmotion');
    }
}
