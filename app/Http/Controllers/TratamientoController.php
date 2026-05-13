<?php
namespace App\Http\Controllers;

use App\Models\Tratamiento;
use Illuminate\Http\Request;

class TratamientoController extends Controller
{
    public function index() {
        return response()->json(Tratamiento::with(['diagnostico', 'medico'])->get());
    }

    public function store(Request $request) {
        $data = $request->validate([
            'id_diagnostico' => 'required|exists:diagnosticos,id_diagnostico',
            'id_medico' => 'required|exists:medicos,id_medico',
            'nombre_tratamiento' => 'required|string',
            'descripcion' => 'nullable|string',
            'duracion' => 'required|string',
            'estado' => 'required|string',
            'frecuencia_administracion' => 'required|string',
            'indicaciones' => 'required|string',
        ]);
        $tratamiento = Tratamiento::create($data);
        return response()->json(['mensaje' => 'Tratamiento creado', 'data' => $tratamiento], 201);
    }

    public function show($id) {
        $tratamiento = Tratamiento::with(['diagnostico', 'medico'])->find($id);
        if (!$tratamiento) return response()->json(['mensaje' => 'No encontrado'], 404);
        return response()->json($tratamiento);
    }

    public function update(Request $request, $id) {
        $tratamiento = Tratamiento::find($id);
        if (!$tratamiento) return response()->json(['mensaje' => 'No encontrado'], 404);
        $tratamiento->update($request->all());
        return response()->json(['mensaje' => 'Tratamiento actualizado', 'data' => $tratamiento]);
    }

    public function destroy($id) {
        $tratamiento = Tratamiento::find($id);
        if (!$tratamiento) return response()->json(['mensaje' => 'No encontrado'], 404);
        $tratamiento->delete();
        return response()->json(['mensaje' => 'Tratamiento eliminado']);
    }
}