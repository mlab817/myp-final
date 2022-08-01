<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatingUnit extends Model
{
    use HasFactory;

    public function ou_group()
    {
        return $this->belongsTo(OuGroup::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
