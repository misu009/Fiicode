<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIstoricMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('istoric_medicals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pacient_id')->constrained('pacients');
            $table->json('alergii_si_intoleranta');
            $table->json('boli_cronice_si_diagnostice');
            $table->json('istoricul_de_boli_si_diagnostice');
            $table->json('interventii_si_procedee_efectuate');
            $table->json('servicii_medicale');
            $table->json('imunizari');
            $table->json('tratament_medicamentos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('istoric_medicals');
    }
};
