<?php

namespace Database\Factories;

use App\Models\Record;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Record::class;

    public function definition(): array
    {
        return [
            //
            'label_name' => fake()->word(),
            'logo' => fake()->imageUrl(),
        ];
    }
}
