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
            
            $table->string('nombre_tratamiento');
            
            $table->string('duracion');
            
            $table->text('indicaciones');
            
            $table->timestamps();
            
            $table->foreign('id_diagnostico')
                ->references('id_diagnostico')
                ->on('diagnosticos')
                ->onDelete('cascade');
            
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
