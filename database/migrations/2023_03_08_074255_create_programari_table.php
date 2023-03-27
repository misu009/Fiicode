<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramariTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('programari', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id')->constrained('doctors');
            $table->unsignedBigInteger('pacient_id')->constrained('pacients');
            $table->dateTime('data');
            $table->enum('importanta', ['warning', 'success', 'danger']);
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programari');
    }
};