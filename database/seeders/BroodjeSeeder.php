<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Broodje;

class BroodjeSeeder extends Seeder
{
    public function run(): void
    {
        Broodje::create(['naam' => 'Kaas', 'prijs' => 1.90,'omschrijving' => 'Broodje met jonge kaas']);
        Broodje::create(['naam' => 'Ham', 'prijs' => 2.90,'omschrijving' => 'Broodje met natuurham']);
        Broodje::create(['naam' => 'Kaas en ham', 'prijs' => 2.10,'omschrijving' => 'Broodje met kaas en ham']);
    }
}
