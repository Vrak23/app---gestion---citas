@extends('layouts.app')
@section('title', 'Nueva Cita')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0"><i class="bi bi-plus-circle text-success"></i> Nueva Cita</h5>
    <a href="/citas" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Volver
    </a>
</div>

<div class="card">
    <div class="card-body p-4">
        <form method="POST" action="/citas">
            @csrf
            <div class="row g-4">

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-person"></i> Paciente
                    </label>
                    <select name="paciente_id" class="form-select" required>
                        <option value="">Seleccionar paciente...</option>
                        <option>Juan Pérez</option>
                        <option>María López</option>
                        <option>Carlos Ruiz</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-person-badge"></i> Médico
                    </label>
                    <select name="medico_id" class="form-select" required>
                        <option value="">Seleccionar médico...</option>
                        <option>Dr. García</option>
                        <option>Dra. Martínez</option>
                        <option>Dr. Torres</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-clipboard2-pulse"></i> Especialidad
                    </label>
                    <select name="especialidad_id" class="form-select" required>
                        <option value="">Seleccionar especialidad...</option>
                        <option>Cardiología</option>
                        <option>Pediatría</option>
                        <option>Neurología</option>
                        <option>Traumatología</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-activity"></i> Estado
                    </label>
                    <select name="estado" class="form-select" required>
                        <option value="pendiente">Pendiente</option>
                        <option value="confirmada">Confirmada</option>
                        <option value="cancelada">Cancelada</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-calendar"></i> Fecha
                    </label>
                    <input type="date" name="fecha" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-clock"></i> Hora
                    </label>
                    <input type="time" name="hora" class="form-control" required>
                </div>

                <div class="col-12">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-chat-text"></i> Motivo de consulta
                    </label>
                    <textarea name="motivo" class="form-control" rows="3"
                        placeholder="Describe el motivo de la consulta..."></textarea>
                </div>

                <div class="col-12 d-flex gap-2 justify-content-end">
                    <a href="/citas" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Guardar Cita
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection