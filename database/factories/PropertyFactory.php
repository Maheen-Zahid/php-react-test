<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
	        'name' => $this->faker->name(),
	        'description' => $this->faker->text(),
	        'image_path' => '/images/'.rand(1,10).".jpg",
        ];
    }
}
