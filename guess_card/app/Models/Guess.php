<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guess extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'generate_datetime', 'attempt_datetime', 'guessed', 'free_bet_id', 'card_id'];
    public $timestamps = false;
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function freeBet() {
        return $this->belongsTo(FreeBet::class);
    }

    public function card() {
        return $this->belongsTo(Card::class);
    }
    
    
}
