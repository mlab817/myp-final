<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrexcSubprogram extends Model
{
    use HasFactory;

    public function prexc_program(): BelongsTo
    {
        return $this->belongsTo(PrexcProgram::class);
    }

    public function prexc_activities(): HasMany
    {
        return $this->hasMany(PrexcActivity::class);
    }
}
