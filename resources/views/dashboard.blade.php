@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

<!-- Estadísticas -->
<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="stat-card green">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="number">24</div>
                    <div class="label">Citas Hoy</div>
                </div>
                <div class="icon"><i class="bi bi-calendar-check"></i></div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card blue">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="number">148</div>
                    <div class="label">Total Pacientes</div>
                </div>
                <div class="icon"><i class="bi bi-people"></i></div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card orange">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="number">12</div>
                    <div class="label">Médicos Activos</div>
                </div>
                <div class="icon"><i class="bi bi-person-badge"></i></div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card red">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="number">3</div>
                    <div class="label">Citas Pendientes</div>
                </div>
                <div class="icon"><i class="bi bi-clock-history"></i></div>
            </div>
        </div>
    </div>
</div>

<!-- Tabla de citas recientes + accesos rápidos -->
<div class="row g-4">

    <!-- Citas recientes -->
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold mb-0"><i class="bi bi-calendar2-week text-success"></i> Citas Recientes</h6>
                    <a href="/citas" class="btn btn-sm btn-outline-success">Ver todas</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Paciente</th>
                                <th>Médico</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Juan Pérez</td>
                                <td>Dr. García</td>
                                <td>13/05/2026</td>
                                <td><span class="badge bg-success">Confirmada</span></td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>María López</td>
                                <td>Dra. Martínez</td>
                                <td>13/05/2026</td>
                                <td><span class="badge bg-warning text-dark">Pendiente</span></td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Carlos Ruiz</td>
                                <td>Dr. Torres</td>
                                <td>14/05/2026</td>
                                <td><span class="badge bg-danger">Cancelada</span></td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Ana Flores</td>
                                <td>Dr. García</td>
                                <td>14/05/2026</td>
                                <td><span class="badge bg-success">Confirmada</span></td>
                            </tr>
                            <tr>
                                <td>005</td>
                                <td>Luis Quispe</td>
                                <td>Dra. Martínez</td>
                                <td>15/05/2026</td>
                                <td><span class="badge bg-warning text-dark">Pendiente</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Accesos rápidos -->
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body">
                <h6 class="fw-bold mb-4"><i class="bi bi-lightning-charge text-warning"></i> Accesos Rápidos</h6>
                <div class="d-grid gap-3">
                    <a href="/citas/create" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i> Nueva Cita
                    </a>
                    <a href="/pacientes/create" class="btn btn-primary">
                        <i class="bi bi-person-plus"></i> Nuevo Paciente
                    </a>
                    <a href="/medicos/create" class="btn btn-warning text-white">
                        <i class="bi bi-person-badge"></i> Nuevo Médico
                    </a>
                    <a href="/especialidades/create" class="btn btn-outline-secondary">
                        <i class="bi bi-clipboard2-plus"></i> Nueva Especialidad
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection