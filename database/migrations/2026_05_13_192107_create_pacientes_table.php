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
        Schema::create('pacientes', function (Blueprint $table) {
    $table->id('id_paciente');
    $table->string('nombre');
    $table->string('apellido');
    $table->string('dni', 8)->unique();
    $table->date('fecha_nacimiento');
    $table->string('genero');
    $table->string('telefono', 15);
    $table->string('correo')->unique();
    $table->string('direccion');
    $table->string('tipo_sangre', 5);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
