<?php


namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function index()
    {
        $visits = Visit::all();
        return view('visits.index', compact('visits'));
    }

    public function create()
    {
        $pets = Pet::all();
        return view('visits.create', compact('pets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'reason' => 'required|string|max:255',
            'diagnosis' => 'required|string|max:255',
            'treatment' => 'required|string|max:255',
            'pet_id' => 'required|exists:pets,id',
        ]);

        Visit::create([
            'date' => $request->date,
            'reason' => $request->reason,
            'diagnosis' => $request->diagnosis,
            'treatment' => $request->treatment,
            'pet_id' => $request->pet_id,
        ]);

        return redirect()->route('visits.index')->with('success', 'Visita registrada con éxito.');
    }

    public function show(Visit $visit)
    {
        return view('visits.show', compact('visit'));
    }

    public function edit(Visit $visit)
    {
        $pets = Pet::all();
        return view('visits.edit', compact('visit', 'pets'));
    }

    public function update(Request $request, Visit $visit)
    {
        $request->validate([
            'date' => 'required|date',
            'reason' => 'required|string|max:255',
            'diagnosis' => 'required|string|max:255',
            'treatment' => 'required|string|max:255',
            'pet_id' => 'required|exists:pets,id',
        ]);

        $visit->update([
            'date' => $request->date,
            'reason' => $request->reason,
            'diagnosis' => $request->diagnosis,
            'treatment' => $request->treatment,
            'pet_id' => $request->pet_id,
        ]);

        return redirect()->route('visits.index')->with('success', 'Visita actualizada con éxito.');
    }

    public function destroy(Visit $visit)
    {
        $visit->delete();
        return redirect()->route('visits.index')->with('success', 'Visita eliminada con éxito.');
    }
}