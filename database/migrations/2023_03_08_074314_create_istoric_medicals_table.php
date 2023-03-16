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
            $table->text('alergii_si_intoleranta');
            $table->text('boli_cronice_si_diagnostice');
            $table->text('istoricul_de_boli_si_diagnostice');
            $table->text('interventii_si_procedee_efectuate');
            $table->text('servicii_medicale');
            $table->text('imunizari');
            $table->text('tratament_medicamentos');
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