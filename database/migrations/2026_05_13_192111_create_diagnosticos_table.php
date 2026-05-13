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
            
            $table->text('descripcion');
            
            $table->text('observaciones')->nullable();
            
            $table->timestamps();
            
            $table->foreign('id_cita')
                ->references('id_cita')
                ->on('citas')
                ->onDelete('cascade');            
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
