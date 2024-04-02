<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'division_where_it_belongs' => $this->faker->randomElement(['AFC North', 'AFC South', 'AFC East', 'AFC West', 'NFC North', 'NFC South', 'NFC East', 'NFC West']),
        ];
    }
}


