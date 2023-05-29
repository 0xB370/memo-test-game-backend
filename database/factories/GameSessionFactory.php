<?php

namespace Database\Factories;

use App\Models\GameSession;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GameSession>
 */
class GameSessionFactory extends Factory
{
    protected $gs = GameSession::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'memo_test_id' => $this->faker->numberBetween(1,2),
            'retries' => $this->faker->numberBetween(0,5),
            'number_of_pairs' => $this->faker->numberBetween(0,5),
            'state' => 'Started',
        ];
    }
}
