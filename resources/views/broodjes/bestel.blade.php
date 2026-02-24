@extends('layouts.app')

@section('title', 'Bestellen')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1 class="h3 mb-1">Bestel broodje</h1>
            <div class="text-muted">Bevestig je bestelling hieronder.</div>
        </div>

        <a class="btn btn-outline-secondary" href="{{ route('broodjes.index') }}">
            Terug
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-start gap-3 p-3 rounded-3 bg-light">
                <div>
                    <div class="fw-semibold fs-5">{{ $broodje->naam }}</div>

                    @if(!empty($broodje->omschrijving))
                        <div class="text-muted">{{ $broodje->omschrijving }}</div>
                    @endif
                </div>

                <div class="fw-semibold fs-5 text-nowrap">
                    €{{ number_format($broodje->prijs, 2, ',', '.') }}
                </div>
            </div>

            <hr class="my-4">

            <form method="POST" action="{{ route('broodjes.bestel', $broodje) }}" class="d-flex gap-2">
                @csrf

                <button type="submit" class="btn btn-success">
                    Bevestig bestelling
                </button>

                <a href="{{ route('broodjes.index') }}" class="btn btn-outline-secondary">
                    Annuleren
                </a>
            </form>
        </div>
    </div>
@endsection
