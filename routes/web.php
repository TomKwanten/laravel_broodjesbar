<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BroodjeController;
use App\Http\Controllers\BestellingController;

Route::get('/', [BroodjeController::class, 'index'])->name('broodjes.index');

Route::get('broodjes/create', [BroodjeController::class,'create'])
    ->name('broodjes.create');
Route::post('/broodjes', [BroodjeController::class,'store'])
    ->name('broodjes.store');

Route::get('/broodjes/{broodje}/edit', [BroodjeController::class, 'edit'])
    ->name('broodjes.edit');
Route::put('/broodjes/{broodje}', [BroodjeController::class, 'update'])
    ->name('broodjes.update');

Route::delete('/broodjes/{broodje}', [BroodjeController::class, 'destroy'])
    ->name('broodjes.destroy');

Route::get('/bestellingen', [BestellingController::class, 'index'])
    ->name('bestellingen.index');

Route::post('/broodjes/{broodje}/bestel', [BestellingController::class, 'store'])
    ->name('broodjes.bestel');
Route::get('/broodjes/{broodje}/bestel', [BestellingController::class, 'create'])
    ->name('broodjes.bestel.create');