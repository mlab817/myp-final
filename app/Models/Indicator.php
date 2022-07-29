<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    use HasFactory;

    public function prexcs()
    {
        return $this->belongsToMany(Prexc::class, 'prexc_indicator', 'indicator_id', 'prexc_id');
    }
}
