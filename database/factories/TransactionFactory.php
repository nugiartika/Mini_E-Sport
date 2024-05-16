<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaction_id' => Str::uuid(),
            'ref_id' => Str::random(),
            'amount' => $this->faker->numberBetween(250000, 1000000),
            'payment_method' => $this->faker->word,
            'team_tournament_id' => function () {
                return \App\Models\TeamTournament::inRandomOrder()->first()->id;
            },
            'status' => $this->faker->randomElement(['PENDING', 'UNPAID', 'PAID', 'REFUND', 'EXPIRED', 'FAILED']),
        ];
    }
}
