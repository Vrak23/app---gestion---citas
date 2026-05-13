@extends('layouts.app')
@section('title', 'Nuevo Paciente')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0"><i class="bi bi-person-plus text-primary"></i> Nuevo Paciente</h5>
    <a href="/pacientes" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Volver
    </a>
</div>

<div class="card">
    <div class="card-body p-4">
        <form method="POST" action="/pacientes">
            @csrf
            <div class="row g-4">

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-person"></i> Nombre completo
                    </label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-card-text"></i> DNI
                    </label>
                    <input type="text" name="dni" class="form-control" placeholder="12345678" required>
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
                    <input type="email" name="email" class="form-control" placeholder="correo@ejemplo.com">
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-calendar"></i> Fecha de nacimiento
                    </label>
                    <input type="date" name="fecha_nacimiento" class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-gender-ambiguous"></i> Género
                    </label>
                    <select name="genero" class="form-select">
                        <option value="">Seleccionar...</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </div>

                <div class="col-12">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-geo-alt"></i> Dirección
                    </label>
                    <input type="text" name="direccion" class="form-control" placeholder="Dirección completa">
                </div>

                <div class="col-12 d-flex gap-2 justify-content-end">
                    <a href="/pacientes" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle"></i> Guardar Paciente
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection
