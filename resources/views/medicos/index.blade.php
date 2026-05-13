@extends('layouts.app')
@section('title', 'Médicos')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0"><i class="bi bi-person-badge text-warning"></i> Gestión de Médicos</h5>
    <a href="/medicos/create" class="btn btn-warning text-white">
        <i class="bi bi-plus-circle"></i> Nuevo Médico
    </a>
</div>

<div class="card mb-4">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Buscar médico...">
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option>Todas las especialidades</option>
                    <option>Cardiología</option>
                    <option>Pediatría</option>
                    <option>Neurología</option>
                </select>
            </div>
            <div class="col-md-3">
                <button class="btn btn-outline-warning w-100">
                    <i class="bi bi-search"></i> Buscar
                </button>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Especialidad</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><i class="bi bi-person-badge text-warning me-1"></i> Dr. García</td>
                        <td>Cardiología</td>
                        <td>987000111</td>
                        <td>garcia@clinica.com</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <a href="/medicos/1/edit" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><i class="bi bi-person-badge text-warning me-1"></i> Dra. Martínez</td>
                        <td>Pediatría</td>
                        <td>987000222</td>
                        <td>martinez@clinica.com</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <a href="/medicos/2/edit" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection