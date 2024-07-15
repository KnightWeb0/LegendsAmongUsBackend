<?php

use App\Models\Artist;
use App\Models\Bands;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Artist::class); //one album can have many artists no this not true
            // an album belongs to an artist
            //but for now it belongs to many
            // $table->foreignIdFor(Bands::class); an a
            $table->string('cover');
            $table->string('title');
            $table->integer('amount_of_songs');
            $table->string('release_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
