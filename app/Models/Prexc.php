<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prexc extends Model
{
    use HasFactory;

    public function indicators()
    {
        return $this->belongsToMany(Indicator::class, 'prexc_indicator', 'prexc_id', 'indicator_id');
    }
}
