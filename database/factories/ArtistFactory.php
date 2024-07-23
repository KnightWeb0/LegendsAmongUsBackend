<?php

namespace Database\Factories;

use App\Models\Artist;
use App\Models\Bands;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Artist::class;


    public function definition(): array
    {
        return [
            // 'bands_id' => Bands::factory(),
            'image'=> fake()->imageUrl(),
            'first_name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'stagename' => fake()->name(),
            'age' => fake()->numberBetween(16, 100),
            'gender' => fake()->randomElement(['Male', 'female']),
            'has_band' => fake()->randomElement(['solo', 'with band'])

        ];
    }
}
