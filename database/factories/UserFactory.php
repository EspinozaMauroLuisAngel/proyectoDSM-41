<?php

namespace Database\Factories;

use App\Models\imagenote;
use App\Models\listnote;
use App\Models\note;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user>
 */
class UserFactory extends Factory
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


            'note_id' => note::inRandomOrder()->first(),
            'listnote_id' => listnote::inRandomOrder()->first(),
            'imagenote_id' => imagenote::inRandomOrder()->first(),
            //'note_id' => note::all()->random()->id,
            //'listnote_id' => listnote::all()->random()->id,
            //'imagenote_id' => imagenote::all()->random()->id,
        

            
            
        ];
    }
}
