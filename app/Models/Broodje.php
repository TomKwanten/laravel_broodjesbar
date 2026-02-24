<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Broodje extends Model
{
    protected $fillable = ['naam', 'prijs', 'omschrijving'];

    public function bestellingen()
    {
        return $this->hasMany(Bestelling::class);
    }
}
