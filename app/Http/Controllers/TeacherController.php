<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Teacher;
use App\Models\Training_Center;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return redirect()->route('teachers.create');
    }

    public function create()
    {
        $areas = Area::all();
        $centers = Training_Center::all();

        return view('Teacher.create', compact('areas', 'centers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'area_id' => 'nullable|exists:areas,id',
            'training_center_id' => 'nullable|exists:training__centers,id',
        ]);

        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->area_id = $request->area_id;
        $teacher->training_center_id = $request->training_center_id;
        $teacher->save();

        return redirect()->route('teachers.index')->with('success', 'Instructor registrado correctamente.');
    }
}
