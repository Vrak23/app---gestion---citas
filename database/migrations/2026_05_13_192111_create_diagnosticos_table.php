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
        Schema::create('diagnosticos', function (Blueprint $table) {
    $table->id('id_diagnostico');
    $table->unsignedBigInteger('id_cita');
    $table->unsignedBigInteger('id_paciente');
    $table->unsignedBigInteger('id_medico');
    $table->text('descripcion');
    $table->datetime('fecha');
    $table->string('gravedad');
    $table->text('recomendaciones')->nullable();
    $table->string('tipo_diagnostico');
    $table->text('observaciones')->nullable();
    $table->timestamps();
    $table->foreign('id_cita')->references('id_cita')->on('citas')->onDelete('cascade');
    $table->foreign('id_paciente')->references('id_paciente')->on('pacientes')->onDelete('cascade');
    $table->foreign('id_medico')->references('id_medico')->on('medicos')->onDelete('cascade');
});
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosticos');
    }
};
