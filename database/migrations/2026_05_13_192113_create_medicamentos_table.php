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
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id('id_medicamento');
            
            $table->unsignedBigInteger('id_tratamiento');
            
            $table->string('nombre');
            
            $table->string('dosis');
            
            $table->string('frecuencia');
            
            $table->timestamps();
            
            $table->foreign('id_tratamiento')
                ->references('id_tratamiento')
                ->on('tratamientos')
                ->onDelete('cascade');
            
            });
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
    }
};
