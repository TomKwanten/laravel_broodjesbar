<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Broodje;

class BroodjeController extends Controller
{
    public function index()
    {
        $broodjes = Broodje::orderBy('naam')->get();
        return view('broodjes.index', compact('broodjes'));
    }

    public function create()
    {
        return view('broodjes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'naam' => ['required', 'max:255'],
            'prijs' => ['required', 'numeric', 'min:0'],
            'omschrijving' => ['nullable', 'max:1000']
        ]);

        Broodje::create($validated);

        return redirect()->route('broodjes.index');
    }

    public function edit(Broodje $broodje)
    {
        return view('broodjes.edit', compact('broodje'));
    }

    public function update(Request $request, Broodje $broodje)
    {
        $validated = $request->validate([
            'naam' => ['required', 'max:255'],
            'prijs' => ['required', 'numeric', 'min:0'],
            'omschrijving' => ['nullable', 'max:1000']
        ]);

        $broodje->update($validated);

        return redirect()->route('broodjes.index');
    }

    public function destroy(Broodje $broodje)
    {
        $broodje->delete();
        
        return redirect()->route('broodjes.index');
    }
}
