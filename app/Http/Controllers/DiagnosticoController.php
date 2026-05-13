<?php
namespace App\Http\Controllers;

use App\Models\Diagnostico;
use Illuminate\Http\Request;

class DiagnosticoController extends Controller
{
    public function index() {
        return response()->json(Diagnostico::with(['cita', 'paciente', 'medico'])->get());
    }

    public function store(Request $request) {
        $data = $request->validate([
            'id_cita' => 'required|exists:citas,id_cita',
            'id_paciente' => 'required|exists:pacientes,id_paciente',
            'id_medico' => 'required|exists:medicos,id_medico',
            'descripcion' => 'required|string',
            'fecha' => 'required|date',
            'gravedad' => 'required|string',
            'recomendaciones' => 'nullable|string',
            'tipo_diagnostico' => 'required|string',
            'observaciones' => 'nullable|string',
        ]);
        $diagnostico = Diagnostico::create($data);
        return response()->json(['mensaje' => 'Diagnóstico creado', 'data' => $diagnostico], 201);
    }

    public function show($id) {
        $diagnostico = Diagnostico::with(['cita', 'paciente', 'medico'])->find($id);
        if (!$diagnostico) return response()->json(['mensaje' => 'No encontrado'], 404);
        return response()->json($diagnostico);
    }

    public function update(Request $request, $id) {
        $diagnostico = Diagnostico::find($id);
        if (!$diagnostico) return response()->json(['mensaje' => 'No encontrado'], 404);
        $diagnostico->update($request->all());
        return response()->json(['mensaje' => 'Diagnóstico actualizado', 'data' => $diagnostico]);
    }

    public function destroy($id) {
        $diagnostico = Diagnostico::find($id);
        if (!$diagnostico) return response()->json(['mensaje' => 'No encontrado'], 404);
        $diagnostico->delete();
        return response()->json(['mensaje' => 'Diagnóstico eliminado']);
    }
}