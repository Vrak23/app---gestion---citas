@extends('layouts.app')
@section('title', 'Citas')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0"><i class="bi bi-calendar-check text-success"></i> Gestión de Citas</h5>
    <a href="/citas/create" class="btn btn-success">
        <i class="bi bi-plus-circle"></i> Nueva Cita
    </a>
</div>

<!-- Filtros -->
<div class="card mb-4">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Buscar paciente...">
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option value="">Todos los estados</option>
                    <option>Confirmada</option>
                    <option>Pendiente</option>
                    <option>Cancelada</option>
                </select>
            </div>
            <div class="col-md-3">
                <input type="date" class="form-control">
            </div>
            <div class="col-md-3">
                <button class="btn btn-outline-success w-100">
                    <i class="bi bi-search"></i> Filtrar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Tabla -->
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Paciente</th>
                        <th>Médico</th>
                        <th>Especialidad</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Juan Pérez</td>
                        <td>Dr. García</td>
                        <td>Cardiología</td>
                        <td>13/05/2026</td>
                        <td>09:00 AM</td>
                        <td><span class="badge bg-success">Confirmada</span></td>
                        <td>
                            <a href="/citas/1/edit" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>María López</td>
                        <td>Dra. Martínez</td>
                        <td>Pediatría</td>
                        <td>13/05/2026</td>
                        <td>10:30 AM</td>
                        <td><span class="badge bg-warning text-dark">Pendiente</span></td>
                        <td>
                            <a href="/citas/2/edit" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Carlos Ruiz</td>
                        <td>Dr. Torres</td>
                        <td>Neurología</td>
                        <td>14/05/2026</td>
                        <td>11:00 AM</td>
                        <td><span class="badge bg-danger">Cancelada</span></td>
                        <td>
                            <a href="/citas/3/edit" class="btn btn-sm btn-warning">
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

        <!-- Paginación -->
        <div class="d-flex justify-content-between align-items-center mt-3">
            <small class="text-muted">Mostrando 3 de 24 citas</small>
            <nav>
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection