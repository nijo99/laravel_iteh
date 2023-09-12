<?php

namespace Database\Factories;
use App\Models\Guess;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guess>
 */
class GuessFactory extends Factory
{
    protected $model = Guess::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'generate_datetime' => $this->faker->dateTime,
            'attempt_datetime' => $this->faker->dateTime,
            'guessed' => $this->faker->boolean,
            'free_bet_id' => \App\Models\FreeBet::factory(),
            'card_id' => \App\Models\Card::factory(),
        ];
    }
}
