@extends('layouts.app')

@section('title', 'Bestellingen')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Bestellingen</h1>
    </div>

    @if($bestellingen->isEmpty())
        <div class="alert alert-info">Nog geen bestellingen geplaatst.</div>
    @else
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Broodje</th>
                            <th class="text-end">Prijs</th>
                            <th>Besteld op</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bestellingen as $bestelling)
                            <tr>
                                <td>{{ $bestelling->id }}</td>
                                <td>{{ $bestelling->broodje?->naam ?? 'Onbekend broodje' }}</td>
                                <td class="text-end">
                                    @if($bestelling->broodje)
                                        €{{ number_format($bestelling->broodje->prijs, 2, ',', '.') }}
                                    @else
                                        —
                                    @endif
                                </td>
                                <td>{{ $bestelling->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
