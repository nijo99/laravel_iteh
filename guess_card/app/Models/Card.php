<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function guesses() {
        return $this->hasMany(Guess::class);
    }
    
}
