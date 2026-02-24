<?php

namespace App\Http\Controllers;

use App\Models\Bestelling;
use App\Models\Broodje;

class BestellingController extends Controller
{
    public function index()
    {
        $bestellingen = Bestelling::with('broodje')
            ->latest()
            ->get();

        return view('bestellingen.index', compact('bestellingen'));
    }
    
    public function store(Broodje $broodje)
    {
        Bestelling::create([
            'broodje_id' => $broodje->id,
        ]);

        return redirect()
            ->route('broodjes.index')
            ->with('succes', "Bestelling geplaatst!");
    }

    public function create(Broodje $broodje)
    {
        return view('broodjes.bestel', compact('broodje'));
    }
}
