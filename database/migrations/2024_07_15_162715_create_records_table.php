<?php

use App\Models\Artist;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // this wil lbe a pivot table i think  nope ?
    public function up(): void
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('label_name');
            //$table->foreignIdFor(Artist::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
