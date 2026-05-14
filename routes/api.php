<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\MedicamentoController;

Route::apiResource('pacientes', PacienteController::class);
Route::apiResource('medicos', MedicoController::class);
Route::apiResource('citas', CitaController::class);
Route::apiResource('diagnosticos', DiagnosticoController::class);
Route::apiResource('tratamientos', TratamientoController::class);
Route::apiResource('medicamentos', MedicamentoController::class);