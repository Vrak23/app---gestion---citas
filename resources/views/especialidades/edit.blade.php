@extends('layouts.app')
@section('title', 'Editar Especialidad')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0"><i class="bi bi-pencil-square text-info"></i> Editar Especialidad</h5>
    <a href="/especialidades" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Volver
    </a>
</div>

<div class="card">
    <div class="card-body p-4">
        <form method="POST" action="/especialidades/1">
            @csrf
            @method('PUT')
            <div class="row g-4">

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-clipboard2-pulse"></i> Nombre de la Especialidad
                    </label>
                    <input type="text" name="nombre" class="form-control" value="Cardiología" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-activity"></i> Estado
                    </label>
                    <select name="estado" class="form-select">
                        <option value="activo" selected>Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                </div>

                <div class="col-12">
                    <label class="form-label fw-semibold text-secondary small">
                        <i class="bi bi-text-paragraph"></i> Descripción
                    </label>
                    <textarea name="descripcion" class="form-control" rows="3">Enfermedades del corazón</textarea>
                </div>

                <div class="col-12 d-flex gap-2 justify-content-end">
                    <a href="/especialidades" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-info text-white">
                        <i class="bi bi-check-circle"></i> Actualizar Especialidad
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection