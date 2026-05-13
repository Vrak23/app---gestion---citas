<?php
namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index() {
        return response()->json(Medico::all());
    }

    public function store(Request $request) {
        $data = $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'especialidad' => 'required|string',
            'telefono' => 'required|string',
            'correo' => 'required|email|unique:medicos',
            'licencia' => 'required|string',
            'años_experiencia' => 'required|integer',
            'horario_atencion' => 'required|string',
        ]);
        $medico = Medico::create($data);
        return response()->json(['mensaje' => 'Médico creado', 'data' => $medico], 201);
    }

    public function show($id) {
        $medico = Medico::find($id);
        if (!$medico) return response()->json(['mensaje' => 'No encontrado'], 404);
        return response()->json($medico);
    }

    public function update(Request $request, $id) {
        $medico = Medico::find($id);
        if (!$medico) return response()->json(['mensaje' => 'No encontrado'], 404);
        $medico->update($request->all());
        return response()->json(['mensaje' => 'Médico actualizado', 'data' => $medico]);
    }

    public function destroy($id) {
        $medico = Medico::find($id);
        if (!$medico) return response()->json(['mensaje' => 'No encontrado'], 404);
        $medico->delete();
        return response()->json(['mensaje' => 'Médico eliminado']);
    }
}