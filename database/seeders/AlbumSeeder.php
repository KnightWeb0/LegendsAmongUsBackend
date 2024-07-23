<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Bands;
use App\Models\Record;
use App\Models\Songs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //we need some albums
        Album::factory(10)->create();
        // Songs::factory(10)->create();
        // Artist::factory(10)->create();
        // Bands::factory(10)->create();
        // Record::factory(10)->create();

    }
}
