<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (Request $request) {
    $query = \App\Models\Cita::with(['paciente', 'medico']);
    
    if ($request->has('search')) {
        $search = $request->get('search');
        $query->whereHas('paciente', function($q) use ($search) {
            $q->where('nombre', 'like', "%$search%")->orWhere('dni', 'like', "%$search%");
        })->orWhere('motivo', 'like', "%$search%");
    }

    $citas = $query->latest()->take(10)->get();
    $stats = [
        'pacientes' => \App\Models\Paciente::count(),
        'medicos' => \App\Models\Medico::count(),
        'citas' => \App\Models\Cita::count(),
        'diagnosticos' => \App\Models\Diagnostico::count(),
        'tratamientos' => \App\Models\Tratamiento::count(),
        'medicamentos' => \App\Models\Medicamento::count(),
    ];
    return view('dashboard', compact('citas', 'stats'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Hospital Resources
    Route::resource('pacientes', \App\Http\Controllers\PacienteController::class);
    Route::resource('medicos', \App\Http\Controllers\MedicoController::class);
    Route::resource('citas', \App\Http\Controllers\CitaController::class);
    Route::get('/export-citas', function() {
        $citas = \App\Models\Cita::with(['paciente', 'medico'])->get();
        $csvExporter = new \App\Services\CsvExporter();
        return $csvExporter->export($citas, 'citas_sanar_plus.csv');
    })->name('citas.export');
});

require __DIR__.'/auth.php';
