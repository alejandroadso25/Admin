<?php

namespace App\Http\Controllers;

use App\Models\Training_Center;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function create()
    {
        $trainingCenters = Training_Center::all();

        return view('Training_Center.create', compact('trainingCenters'));
    }

    public function store(Request $request)
    {
        Training_Center::create($request->all());

        return redirect()->route('training-centers.create')->with('success', 'Centro de formación registrado correctamente.');
    }
}
