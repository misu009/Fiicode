<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacients', function (Blueprint $table) {
            $table->id();
            $table->string('poza_profil')->nullable();
            $table->string('nume');
            $table->string('prenume');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('data_nasterii');
            $table->json('adresa');
            $table->unsignedBigInteger('doctor_id')->constrained('doctors');
            $table->unsignedBigInteger('istoric_medical_id')->constrained('istoric_medical')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacients');
    }
};
