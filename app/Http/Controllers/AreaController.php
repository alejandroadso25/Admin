<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        return redirect()->route('areas.create');
    }

    public function create()
    {
        $areas = Area::latest()->get();

        return view('Area.create', compact('areas'));
    }

    public function store(Request $request)
    {
        $area = new Area();

        $area->name = $request->name;

        $area->save();

        return $area;
    }
}
