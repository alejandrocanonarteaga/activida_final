<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

cclass SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::orderBy('semester')->get();

        return view('subjects.index', compact('subjects'));
    }

    public function show(Subject $subject)
    {
        return view('subjects.show', compact('subject'));
    }
}

