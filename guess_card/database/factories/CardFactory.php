<?php

namespace Database\Factories;
use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    protected $model = Card::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'card_hidden' => $this->faker->numberBetween(1,14), // Use appropriate data generation logic
            'card_offered' => $this->faker->numberBetween(1,14), // Use appropriate data generation logic
            'generate_datetime' => $this->faker->dateTime,
        ];
    }
}
