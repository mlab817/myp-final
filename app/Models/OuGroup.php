<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OuGroup extends Model
{
    use HasFactory;

    public function prexc_programs()
    {
        return $this->hasMany(PrexcProgram::class);
    }

    public function operating_units()
    {
        return $this->hasMany(OperatingUnit::class);
    }
}
