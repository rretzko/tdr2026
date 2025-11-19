<?php

namespace Database\Factories;

use App\Models\County;
use App\Models\Geostate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $countyIds = County::all()->pluck('id');
        $geostateIds = Geostate::all()->pluck('id')->toArray();

        return [
            'school_name' => $school = fake()->company(),
            'postal_code' => fake()->postcode(),
            'abbr' => substr($school, 0, 8),
            'city' => fake()->city(),
            'county_id' => fake()->randomElement($countyIds),
            'geostate_id' => fake()->randomElement($geostateIds),
        ];
    }
}
