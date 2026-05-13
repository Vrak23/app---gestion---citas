@extends('layouts.app')
@section('title', 'Especialidades')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0"><i class="bi bi-clipboard2-pulse text-info"></i> Especialidades</h5>
    <a href="/especialidades/create" class="btn btn-info text-white">
        <i class="bi bi-plus-circle"></i> Nueva Especialidad
    </a>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Especialidad</th>
                        <th>Descripción</th>
                        <th>Médicos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><i class="bi bi-heart-pulse text-danger me-1"></i> Cardiología</td>
                        <td>Enfermedades del corazón</td>
                        <td><span class="badge bg-primary">3 médicos</span></td>
                        <td>
                            <a href="/especialidades/1/edit" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><i class="bi bi-emoji-smile text-warning me-1"></i> Pediatría</td>
                        <td>Atención médica a niños</td>
                        <td><span class="badge bg-primary">2 médicos</span></td>
                        <td>
                            <a href="/especialidades/2/edit" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><i class="bi bi-brain text-info me-1"></i> Neurología</td>
                        <td>Sistema nervioso</td>
                        <td><span class="badge bg-primary">2 médicos</span></td>
                        <td>
                            <a href="/especialidades/3/edit" class="btn btn-sm btn-warning">
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