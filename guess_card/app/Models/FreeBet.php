<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeBet extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'up_down', 'attempt_datetime'];
    public $timestamps = false;
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function guesses() {
        return $this->hasMany(Guess::class);
    }
    
}
