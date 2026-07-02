<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Course;
use App\Models\Training_Center;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create()
    {
        $areas = Area::all();
        $training_centers = Training_Center::all();

        return view('Course.create', compact('areas', 'training_centers'));
    }

    public function store(Request $request)
    {
        Course::create($request->all());

        return redirect()->route('courses.create')->with('success', 'Curso registrado correctamente.');
    }
}