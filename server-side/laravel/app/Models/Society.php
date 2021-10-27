<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    use HasFactory;

    public function regional()
    {
        return $this->belongsTo(Regional::class);
    }

    public function consultation()
    {
        return $this->hasOne(Consultation::class);
    }
}
