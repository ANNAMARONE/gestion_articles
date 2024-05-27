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
        Schema::create('taches', function (Blueprint $table) {
          
            $table->id();
            $table->string('nom');
            $table->string('description')->nullable();
            $table->dateTime('date_de_creation')->nullable();
            $table->string('type')->nullable();
            $table->string('image')->default('https://place-hold.it/300x500');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taches');
    }
};
