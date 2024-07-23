<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Bands;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Album::class;


    public function definition(): array
    {
        return [
            //
            // 'bands_id' => Bands::factory(),
            'cover' => fake()->imageUrl(),
            'title' => fake()->name( ),
            'amount_of_songs'=> fake()->numberBetween(1,12),
            'release_date' => fake()->date(),
        ];
    }
}
