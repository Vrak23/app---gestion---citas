@extends('layouts.app')
@section('title', 'Pacientes')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0"><i class="bi bi-people text-primary"></i> Gestión de Pacientes</h5>
    <a href="/pacientes/create" class="btn btn-primary">
        <i class="bi bi-person-plus"></i> Nuevo Paciente
    </a>
</div>

<div class="card mb-4">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Buscar por nombre o DNI...">
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option>Todos</option>
                    <option>Activo</option>
                    <option>Inactivo</option>
                </select>
            </div>
            <div class="col-md-3">
                <button class="btn btn-outline-primary w-100">
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
                        <th>DNI</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Fecha Nac.</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><i class="bi bi-person-circle text-primary me-1"></i> Juan Pérez</td>
                        <td>12345678</td>
                        <td>987654321</td>
                        <td>juan@email.com</td>
                        <td>15/03/1990</td>
                        <td>
                            <a href="/pacientes/1" class="btn btn-sm btn-info text-white">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="/pacientes/1/edit" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><i class="bi bi-person-circle text-primary me-1"></i> María López</td>
                        <td>87654321</td>
                        <td>912345678</td>
                        <td>maria@email.com</td>
                        <td>22/07/1985</td>
                        <td>
                            <a href="/pacientes/2" class="btn btn-sm btn-info text-white">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="/pacientes/2/edit" class="btn btn-sm btn-warning">
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
        <div class="d-flex justify-content-between align-items-center mt-3">
            <small class="text-muted">Mostrando 2 de 148 pacientes</small>
            <nav>
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection