@extends('layouts.app')

@section('title', 'Nieuw broodje')

@section('content')
    <h1 class="h3 mb-3">Nieuw broodje</h1>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('broodjes.store') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Naam</label>
                    <input class="form-control" type="text" name="naam" value="{{ old('naam') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Prijs</label>
                    <input class="form-control" type="text" name="prijs" value="{{ old('prijs') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Omschrijving</label>
                    <textarea class="form-control" name="omschrijving" rows="3">{{ old('omschrijving') }}</textarea>
                </div>

                <div class="d-flex gap-2">
                    <button class="btn btn-primary" type="submit">Opslaan</button>
                    <a class="btn btn-outline-secondary" href="{{ route('broodjes.index') }}">Annuleren</a>
                </div>
            </form>
        </div>
    </div>
@endsection
