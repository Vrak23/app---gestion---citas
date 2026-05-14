<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('id_paciente');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('dni')->unique();
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->string('telefono')->nullable();
            $table->string('correo')->unique();
            $table->string('direccion')->nullable();
            $table->string('tipo_sangre')->nullable();
        });

        Schema::create('medicos', function (Blueprint $table) {
            $table->id('id_medico');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('especialidad');
            $table->string('telefono')->nullable();
            $table->string('correo')->unique();
            $table->string('licencia')->unique();
            $table->unsignedInteger('anios_experiencia')->default(0);
            $table->string('horario_atencion');
        });

        Schema::create('citas', function (Blueprint $table) {
            $table->id('id_cita');
            $table->foreignId('id_paciente')->constrained('pacientes', 'id_paciente')->onDelete('cascade');
            $table->foreignId('id_medico')->constrained('medicos', 'id_medico')->onDelete('cascade');
            $table->date('fecha_cita');
            $table->time('hora_cita');
            $table->string('estado')->default('Pendiente');
            $table->string('motivo');
            $table->text('observaciones')->nullable();
            $table->string('sala');
        });

        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->id('id_diagnostico');
            $table->foreignId('id_cita')->constrained('citas', 'id_cita')->onDelete('cascade');
            $table->foreignId('id_paciente')->constrained('pacientes', 'id_paciente')->onDelete('cascade');
            $table->foreignId('id_medico')->constrained('medicos', 'id_medico')->onDelete('cascade');
            $table->text('descripcion');
            $table->date('fecha');
            $table->string('gravedad');
            $table->text('recomendaciones')->nullable();
            $table->string('tipo_diagnostico');
            $table->text('observaciones')->nullable();
        });

        Schema::create('tratamientos', function (Blueprint $table) {
            $table->id('id_tratamiento');
            $table->foreignId('id_diagnostico')->constrained('diagnosticos', 'id_diagnostico')->onDelete('cascade');
            $table->foreignId('id_medico')->constrained('medicos', 'id_medico')->onDelete('cascade');
            $table->string('nombre_tratamiento');
            $table->text('descripcion');
            $table->string('duracion');
            $table->string('estado')->default('Activo');
            $table->string('frecuencia_administracion');
            $table->text('indicaciones')->nullable();
        });

        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id('id_medicamento');
            $table->foreignId('id_tratamiento')->constrained('tratamientos', 'id_tratamiento')->onDelete('cascade');
            $table->string('nombre');
            $table->string('dosis');
            $table->string('frecuencia');
            $table->string('duracion');
            $table->string('proveedor')->nullable();
            $table->text('efectos_secundarios')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
        Schema::dropIfExists('tratamientos');
        Schema::dropIfExists('diagnosticos');
        Schema::dropIfExists('citas');
        Schema::dropIfExists('medicos');
        Schema::dropIfExists('pacientes');
    }
};
