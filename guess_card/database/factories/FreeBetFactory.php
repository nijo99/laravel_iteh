<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\FreeBet;
class FreeBetFactory extends Factory
{
    protected $model = FreeBet::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'up_down' => $this->faker->randomElement(['up', 'down']),
            'attempt_datetime' => $this->faker->dateTime,
        ];
    }
}

