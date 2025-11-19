<?php

namespace Database\Factories;

use App\Models\Geostate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\County>
 */
class CountyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $geostateIds = Geostate::all()->pluck('id');

        return [
            'geostate_id' => fake()->randomElement($geostateIds),
            'county_name' => $word = fake()->word(),
            'abbr' => substr($word, 0, 4),
        ];
    }
}
