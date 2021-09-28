<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'deadline', 'created_by'];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function choices(){
        return $this->hasMany(Choice::class);
    }
}
