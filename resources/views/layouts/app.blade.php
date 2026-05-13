<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'GestiónCitas') }} - @yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary: #1a6b5a;
            --secondary: #2ecc71;
            --dark: #1e2a3a;
        }
        body { background: #f4f6f9; }

        /* Sidebar */
        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: linear-gradient(180deg, #1e2a3a 0%, #1a6b5a 100%);
            position: fixed;
            top: 0; left: 0;
            z-index: 100;
            padding-top: 1rem;
        }
        .sidebar-brand {
            color: white;
            font-size: 1.3rem;
            font-weight: 700;
            padding: 1rem 1.5rem 2rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.75);
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            margin: 2px 10px;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: rgba(255,255,255,0.15);
            color: white;
        }
        .sidebar .nav-section {
            color: rgba(255,255,255,0.4);
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 1rem 1.5rem 0.3rem;
        }

        /* Topbar */
        .topbar {
            margin-left: 250px;
            background: white;
            padding: 0.75rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 99;
        }

        /* Content */
        .main-content {
            margin-left: 250px;
            padding: 2rem;
            min-height: 100vh;
        }

        /* Cards */
        .stat-card {
            border-radius: 12px;
            border: none;
            padding: 1.5rem;
            color: white;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .stat-card.green  { background: linear-gradient(135deg, #1a6b5a, #2ecc71); }
        .stat-card.blue   { background: linear-gradient(135deg, #1e2a3a, #2d4a6b); }
        .stat-card.orange { background: linear-gradient(135deg, #e67e22, #f39c12); }
        .stat-card.red    { background: linear-gradient(135deg, #c0392b, #e74c3c); }
        .stat-card .number { font-size: 2.5rem; font-weight: 700; }
        .stat-card .label  { font-size: 0.9rem; opacity: 0.85; }
        .stat-card .icon   { font-size: 2.5rem; opacity: 0.3; }

        .card { border: none; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.06); }
        .table th { background: #f8f9fa; font-weight: 600; font-size: 0.85rem; }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <i class="bi bi-heart-pulse-fill text-success"></i>
            GestiónCitas
        </div>

        <div class="sidebar-nav mt-2">
            <div class="nav-section">Principal</div>
            <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>

            <div class="nav-section">Gestión</div>
            <a href="/citas" class="nav-link {{ request()->is('citas*') ? 'active' : '' }}">
                <i class="bi bi-calendar-check"></i> Citas
            </a>
            <a href="/pacientes" class="nav-link {{ request()->is('pacientes*') ? 'active' : '' }}">
                <i class="bi bi-people"></i> Pacientes
            </a>
            <a href="/medicos" class="nav-link {{ request()->is('medicos*') ? 'active' : '' }}">
                <i class="bi bi-person-badge"></i> Médicos
            </a>
            <a href="/especialidades" class="nav-link {{ request()->is('especialidades*') ? 'active' : '' }}">
                <i class="bi bi-clipboard2-pulse"></i> Especialidades
            </a>

            <div class="nav-section">Cuenta</div>
            <a href="/profile" class="nav-link">
                <i class="bi bi-person-circle"></i> Perfil
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="nav-link border-0 w-100 text-start bg-transparent">
                    <i class="bi bi-box-arrow-left"></i> Cerrar sesión
                </button>
            </form>
        </div>
    </div>

    <!-- Topbar -->
    <div class="topbar">
        <div>
            <h6 class="mb-0 fw-bold text-muted">@yield('title', 'Dashboard')</h6>
        </div>
        <div class="d-flex align-items-center gap-3">
            <i class="bi bi-bell fs-5 text-muted"></i>
            <div class="d-flex align-items-center gap-2">
                <div class="rounded-circle bg-success d-flex align-items-center justify-content-center text-white"
                    style="width:35px;height:35px;font-size:0.9rem">
                    {{ strtoupper(substr(Auth::user()->name ?? 'U', 0, 1)) }}
                </div>
                <span class="fw-semibold small">{{ Auth::user()->name ?? 'Usuario' }}</span>
            </div>
        </div>
    </div>

    <!-- Contenido -->
    <div class="main-content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>