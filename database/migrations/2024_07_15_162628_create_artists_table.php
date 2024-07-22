<?php

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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('first_name');
            $table->string('surname');
            $table->string('stagename');
            $table->integer('age');
            $table->string('gender');
            $table->foreignIdFor(Bands::class); //an Artist belongs to a band
            $table->boolean('has_band'); //if false = solo if true = is with a band
            // $table->string('past_bands');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
