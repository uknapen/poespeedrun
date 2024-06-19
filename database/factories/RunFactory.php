<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Run>
 */
class RunFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'player' => 'John Doe',
            'time' => $this->faker->time(),
            'dateCreate' => $this->faker->date(),
            'category' => $this->faker->boolean() ? 'A10 Pts+Lab' : 'A5 Pts+Lab',
            'class' => 'Templar',
            'version' => '3.23',
            'archetype' => 'Caster',
            'deathless' => $this->faker->boolean() ? 'Yes' : 'No',
            'url' => $this->faker->url(),
            'comment' => $this->faker->sentence(),
        ];
    }
}
        