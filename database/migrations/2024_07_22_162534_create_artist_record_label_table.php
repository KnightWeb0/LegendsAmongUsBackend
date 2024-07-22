<?php

use App\Models\Artist;
use App\Models\Record;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {// an artist can have many record labels
        // a record label can have many artists
        Schema::create('artist_record_label', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Artist::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Record::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist_record_label');
    }
};
