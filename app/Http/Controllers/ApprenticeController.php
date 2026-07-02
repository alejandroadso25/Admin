<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index()
    {
        return redirect()->route('apprentices.create');
    }

    public function create()
    {
        $courses = Course::all();
        $computers = Computer::all();

        return view('Apprentice.create', compact('courses', 'computers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cell_number' => 'required|string|max:20',
            'course_id' => 'nullable|exists:courses,id',
            'computer_id' => 'nullable|exists:computers,id',
        ]);

        $apprentice = new Apprentice();
        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->cell_number = $request->cell_number;
        $apprentice->course_id = $request->course_id;
        $apprentice->computer_id = $request->computer_id;
        $apprentice->save();

        return redirect()->route('apprentices.index')->with('success', 'Aprendiz registrado correctamente.');
    }

    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();

        return redirect()->route('apprentices.index')->with('success', 'Aprendiz eliminado correctamente.');
    }
}
