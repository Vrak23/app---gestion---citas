<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Cita::with(['paciente', 'medico'])
            ->orderByDesc('fecha_cita')
            ->orderByDesc('hora_cita')
            ->paginate(10);

        return response()->json(
        Cita::with(['paciente', 'medico'])->get()
    );
    }

    public function create()
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all();

        return view('citas.create', compact('pacientes', 'medicos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_paciente' => 'required|exists:pacientes,id_paciente',
            'id_medico' => 'required|exists:medicos,id_medico',
            'fecha_cita' => 'required|date|after_or_equal:today',
            'hora_cita' => 'required|date_format:H:i',
            'estado' => 'nullable|string|max:50',
            'motivo' => 'required|string|max:255',
            'observaciones' => 'nullable|string',
            'sala' => 'required|string|max:255',
        ]);

        $validated['estado'] = $validated['estado'] ?? 'Pendiente';

        Cita::create($validated);

        return redirect()->route('dashboard')->with('success', 'Cita agendada correctamente.');
    }

    public function show(Cita $cita)
    {
        return response()->json($cita->load(['paciente', 'medico', 'diagnostico']));
    }

    public function edit(Cita $cita)
    {
        return redirect()->route('dashboard');
    }

    public function update(Request $request, Cita $cita)
    {
        $validated = $request->validate([
            'id_paciente' => 'sometimes|required|exists:pacientes,id_paciente',
            'id_medico' => 'sometimes|required|exists:medicos,id_medico',
            'fecha_cita' => 'sometimes|required|date',
            'hora_cita' => 'sometimes|required|date_format:H:i',
            'estado' => 'sometimes|required|string|max:50',
            'motivo' => 'sometimes|required|string|max:255',
            'observaciones' => 'nullable|string',
            'sala' => 'sometimes|required|string|max:255',
        ]);

        $cita->update($validated);

        return response()->json($cita->load(['paciente', 'medico']));
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();

        return redirect()->back()->with('success', 'Cita cancelada correctamente.');
    }
}
