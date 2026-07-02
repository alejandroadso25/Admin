<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function create()
    {
        $areas = Area::all();

        return view('Area.create', compact('areas'));
    }

    public function store(Request $request)
    {
        Area::create($request->all());

        return redirect()->route('areas.create')->with('success', 'Área registrada correctamente.');
    }
}