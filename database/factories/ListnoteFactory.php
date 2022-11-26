<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\listnote>
 */
class ListnoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'listdescription' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'remind' => $this->faker->dateTime(),
        ];
    }
}
