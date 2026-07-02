<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function create()
    {
        return view('Computer.create');
    }

    public function store(Request $request)
    {
        $computer = Computer::create($request->all());

        return redirect()->route('computers.create')->with('success', 'Computador registrado correctamente.');
    }
}