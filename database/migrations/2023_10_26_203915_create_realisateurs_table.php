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
        Schema::create('realisateurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personID');
            $table->unsignedBigInteger('filmID');

            $table->foreign('personID')->references('id')->on('persons');
            $table->foreign('filmID')->references('id')->on('films');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realisateurs');
    }
};
