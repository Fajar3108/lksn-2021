<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;

    public function vaccines()
    {
        return $this->belongsToMany(Vaccine::class);
    }
}
