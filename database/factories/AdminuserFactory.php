<?php

namespace Database\Factories;

use App\Models\user;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\adminuser>
 */
class AdminuserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'name' => $this->faker->name(),
            'lastname' => $this->faker->word(),
            'email' => $this->faker->email(),
            'password' => $this->faker->word(),

            //'user_id' => user::all()->random()->id,

        ];
    }
}
