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
        // 1. Médicos
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('especialidad');
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->timestamps();
        });

        // 2. Pacientes
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('dni')->unique(); // ID del paciente (ej: 001661085)
            $table->string('nombre');
            $table->string('email')->unique();
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->timestamps();
        });

        // 3. Citas
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->constrained('pacientes')->onDelete('cascade');
            $table->foreignId('medico_id')->constrained('medicos')->onDelete('cascade');
            $table->dateTime('fecha_hora');
            $table->string('motivo');
            $table->enum('sala_tipo', ['Fisica', 'Virtual']);
            $table->string('sala_nombre'); // Ej: Sala 204 o Link Zoom
            $table->string('estado')->default('Pendiente');
            $table->timestamps();
        });

        // 4. Diagnósticos
        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cita_id')->constrained('citas')->onDelete('cascade');
            $table->text('descripcion');
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });

        // 5. Tratamientos
        Schema::create('tratamientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('diagnostico_id')->constrained('diagnosticos')->onDelete('cascade');
            $table->string('nombre');
            $table->string('duracion');
            $table->text('indicaciones');
            $table->timestamps();
        });

        // 6. Medicamentos
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('gramaje');
            $table->string('laboratorio')->nullable();
            $table->integer('stock')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
        Schema::dropIfExists('tratamientos');
        Schema::dropIfExists('diagnosticos');
        Schema::dropIfExists('citas');
        Schema::dropIfExists('pacientes');
        Schema::dropIfExists('medicos');
    }
};
