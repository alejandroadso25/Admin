<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        return redirect()->route('computers.create');
    }

    public function create()
    {
        $computers = Computer::latest()->get();

        return view('Computer.create', compact('computers'));
    }

    public function store(Request $request)
    {
        $computer = new Computer();

        $computer->number = $request->number;
        $computer->brand = $request->brand;

        $computer->save();

        return $computer;
    }
}
