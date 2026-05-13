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
       Schema::create('tratamientos', function (Blueprint $table) {
    $table->id('id_tratamiento');
    $table->unsignedBigInteger('id_diagnostico');
    $table->unsignedBigInteger('id_medico');
    $table->string('nombre_tratamiento');
    $table->text('descripcion')->nullable();
    $table->string('duracion');
    $table->string('estado');
    $table->string('frecuencia_administracion');
    $table->text('indicaciones');
    $table->timestamps();
    $table->foreign('id_diagnostico')->references('id_diagnostico')->on('diagnosticos')->onDelete('cascade');
    $table->foreign('id_medico')->references('id_medico')->on('medicos')->onDelete('cascade');
});
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tratamientos');
    }
};
