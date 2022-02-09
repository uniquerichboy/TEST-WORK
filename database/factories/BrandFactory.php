<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'code' => $this->faker->unique()->slug(),
            'display_on_home' => 1,
            'banner_title' => $this->faker->title(),
            'banner_description' => $this->faker->title(),
        ];
    }
}
