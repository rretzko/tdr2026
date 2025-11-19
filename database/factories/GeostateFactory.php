<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Geostate>
 */
class GeostateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $state = fake()->randomElement([
            ['name' => 'New Jersey', 'abbr' => 'NJ'],
            ['name' => 'New York', 'abbr' => 'NY'],
            ['name' => 'California', 'abbr' => 'CA'],
            // ... add all 50 states
        ]);

        return [
            'geostate_name' => $state['name'],
            'abbr' => $state['abbr'],
        ];
    }
}
