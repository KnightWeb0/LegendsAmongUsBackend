<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Songs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Songs>
 */
class SongsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Songs::class;

    public function definition(): array
    {
        return [
            //
        //    'album_id' => Album::factory(),
           'title' => fake()->word(),
           'duration' => fake()->time(),
           'plays' => fake()->randomDigit(),
        ];
    }
}
