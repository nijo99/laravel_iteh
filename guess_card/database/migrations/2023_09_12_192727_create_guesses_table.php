<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('guesses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->timestamp('generate_datetime')->nullable();
            $table->timestamp('attempt_datetime')->nullable();
            $table->boolean('guessed');

            // Foreign key for FreeBet
            $table->unsignedBigInteger('free_bet_id');
            $table->foreign('free_bet_id')->references('id')->on('free_bets')->onDelete('cascade');

            // Foreign key for Card
            $table->unsignedBigInteger('card_id');
            $table->foreign('card_id')->references('id')->on('cards')->onDelete('cascade');  

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('guesses');
    }
};
