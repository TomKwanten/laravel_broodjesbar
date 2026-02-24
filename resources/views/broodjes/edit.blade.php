@extends('layouts.app')

@section('title', 'Broodje aanpassen')

@section('content')
    <h1 class="h3 mb-3">Broodje aanpassen</h1>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('broodjes.update', $broodje) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Naam</label>
                    <input class="form-control" type="text" name="naam" value="{{ old('naam', $broodje->naam) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Prijs</label>
                    <input class="form-control" type="text" name="prijs" value="{{ old('prijs', $broodje->prijs) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Omschrijving</label>
                    <textarea class="form-control" name="omschrijving" rows="3">{{ old('omschrijving', $broodje->omschrijving) }}</textarea>
                </div>

                <div class="d-flex gap-2">
                    <button class="btn btn-primary" type="submit">Opslaan</button>
                    <a class="btn btn-outline-secondary" href="{{ route('broodjes.index') }}">Annuleren</a>
                </div>
            </form>
        </div>
    </div>
@endsection
