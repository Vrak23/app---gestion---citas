<?php
namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index() {
        return response()->json(Cita::with(['paciente', 'medico'])->get());
    }

    public function store(Request $request) {
        $data = $request->validate([
            'id_paciente' => 'required|exists:pacientes,id_paciente',
            'id_medico' => 'required|exists:medicos,id_medico',
            'fecha_cita' => 'required|date',
            'hora_cita' => 'required',
            'estado' => 'in:pendiente,confirmada,cancelada,atendida',
            'motivo' => 'required|string',
            'observaciones' => 'nullable|string',
            'sala' => 'nullable|string',
        ]);
        $cita = Cita::create($data);
        return response()->json(['mensaje' => 'Cita creada', 'data' => $cita], 201);
    }

    public function show($id) {
        $cita = Cita::with(['paciente', 'medico'])->find($id);
        if (!$cita) return response()->json(['mensaje' => 'No encontrado'], 404);
        return response()->json($cita);
    }

    public function update(Request $request, $id) {
        $cita = Cita::find($id);
        if (!$cita) return response()->json(['mensaje' => 'No encontrado'], 404);
        $cita->update($request->all());
        return response()->json(['mensaje' => 'Cita actualizada', 'data' => $cita]);
    }

    public function destroy($id) {
        $cita = Cita::find($id);
        if (!$cita) return response()->json(['mensaje' => 'No encontrado'], 404);
        $cita->delete();
        return response()->json(['mensaje' => 'Cita eliminada']);
    }
}