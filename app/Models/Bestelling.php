<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bestelling extends Model
{
    protected $table = 'bestellingen';
    protected $fillable = ['broodje_id'];

    public function broodje()
    {
        return $this->belongsTo(Broodje::class);
    }
}
