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
        Schema::create('medicos', function (Blueprint $table) {
    $table->id('id_medico');
    $table->string('nombre');
    $table->string('apellido');
    $table->string('especialidad');
    $table->string('telefono', 15);
    $table->string('correo')->unique();
    $table->string('licencia');
    $table->integer('anios_experiencia');
    $table->string('horario_atencion');
    $table->timestamps();
});
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
