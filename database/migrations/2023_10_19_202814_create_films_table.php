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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('resume');
            $table->string('pochette');
            $table->string('duree');
            $table->string('annee');
            $table->string('rating');
            $table->unsignedBigInteger('realisateur');
            $table->unsignedBigInteger('producteur');
            $table->foreign('realisateur')->references('id')->on('person');
            $table->foreign('producteur')->references('id')->on('person');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
