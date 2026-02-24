@extends('layouts.app')

@section('title', 'Broodjes')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Broodjes</h1>
        <span class="text-muted">{{ $broodjes->count() }} items</span>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                <tr>
                    <th>Naam</th>
                    <th class="text-end">Prijs</th>
                    <th>Omschrijving</th>
                    <th class="text-end">Acties</th>
                </tr>
                </thead>
                <tbody>
                @foreach($broodjes as $broodje)
                    <tr>
                        <td class="fw-semibold">{{ $broodje->naam }}</td>
                        <td class="text-end">€{{ number_format($broodje->prijs, 2, ',', '.') }}</td>
                        <td class="text-muted">{{ $broodje->omschrijving ?? '—' }}</td>
                        <td class="text-end">
                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex gap-2 justify-content-end">
                                    <a class="btn btn-sm btn-success" href="{{ route('broodjes.bestel.create', $broodje) }}">
                                        Bestel
                                    </a>

                                    <form method="POST" action="{{ route('broodjes.destroy', $broodje) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Ben je zeker dat je dit broodje wil verwijderen?')">
                                            Verwijderen
                                        </button>
                                    </form>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <a class="btn btn-sm btn-outline-secondary"
                                    href="{{ route('broodjes.edit', $broodje) }}">
                                        Aanpassen
                                    </a>
                                </div>

                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
