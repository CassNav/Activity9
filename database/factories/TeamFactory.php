<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->city . ' ' . $this->faker->randomElement(['Raiders', 'Chiefs', 'Broncos', 'Chargers']),
            'city' => $this->faker->city,
            'titles' => $this->faker->numberBetween(0, 5),
            'logo' => $this->faker->imageUrl(100, 100, 'team', true), // Generate a fake logo URL
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
