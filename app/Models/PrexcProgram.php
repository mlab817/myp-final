<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrexcProgram extends Model
{
    use HasFactory;

    public function prexc_subprograms(): HasMany
    {
        return $this->hasMany(PrexcSubprogram::class);
    }
}
