@extends('layouts.app')
@section('title', 'Nuevo Médico')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0"><i class="bi bi-person-badge text-warning"></i> Nuevo Médico</h5>
    <a href="/medicos" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Volver
    </a>
</div>

<div class="card">
    <div class="card-body p-4">
        <form method="POST" action="/medicos">
            @csrf
            <div class="row g-4">

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-person"></i> Nombre completo
                    </label>
                    <input type="text" name="nombre" class="form-control" placeholder="Dr. Nombre Apellido" required>
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
                        <i class="bi bi-telephone"></i> Teléfono
                    </label>
                    <input type="text" name="telefono" class="form-control" placeholder="987654321">
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-envelope"></i> Email
                    </label>
                    <input type="email" name="email" class="form-control" placeholder="medico@clinica.com">
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-award"></i> CMP (Colegio Médico)
                    </label>
                    <input type="text" name="cmp" class="form-control" placeholder="CMP-12345">
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-activity"></i> Estado
                    </label>
                    <select name="estado" class="form-select">
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                </div>

                <div class="col-12 d-flex gap-2 justify-content-end">
                    <a href="/medicos" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-warning text-white">
                        <i class="bi bi-check-circle"></i> Guardar Médico
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection