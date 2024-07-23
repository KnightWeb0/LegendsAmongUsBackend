<?php

namespace Database\Factories;

use App\Models\Artist;
use App\Models\Bands;
use Faker\Core\Color;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bands>
 */
class BandsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Bands::class;


    public function definition(): array
    {
        return [
            //
            'band_name' => fake()->word(),
            // 'artist_id' => Artist::factory(),
            'genre' => fake()->word(),


        ];
    }
}
