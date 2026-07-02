<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Course;
use App\Models\Training_Center;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return redirect()->route('courses.create');
    }

    public function create()
    {
        $areas = Area::all();
        $centers = Training_Center::all();

        return view('Course.create', compact('areas', 'centers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'course_number' => 'required|string',
            'day' => 'required|string',
            'area_id' => 'nullable|exists:areas,id',
            'training_center_id' => 'nullable|exists:training__centers,id',
        ]);

        $course = new Course();
        $course->course_number = $request->course_number;
        $course->day = $request->day;
        $course->area_id = $request->area_id;
        $course->training_center_id = $request->training_center_id;
        $course->save();

        return redirect()->route('courses.index')->with('success', 'Curso registrado correctamente.');
    }
}
