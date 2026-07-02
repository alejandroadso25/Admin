<?php

namespace App\Http\Controllers;

use App\Models\Training_Center;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index()
    {
        return redirect()->route('training-centers.create');
    }

    public function create()
    {
        $trainingCenters = Training_Center::latest()->get();

        return view('Training_Center.create', compact('trainingCenters'));
    }

    public function store(Request $request)
    {
        $center = new Training_Center();

        $center->name = $request->name;
        $center->location = $request->location;

        $center->save();

        return $center;
    }
}
