<?php

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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table-> string('title', 50);
            $table-> text('description') ->nullable();
            $table-> string('thumb')->nullable();
            $table-> string('price', 15)->nullable();
            $table-> string('series', 50)->nullable();
            $table-> date('sale_date')->nullable();
            $table-> string('writers')->nullable();
            $table-> string('artists')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
