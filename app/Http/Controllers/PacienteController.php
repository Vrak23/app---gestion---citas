<?php
namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index() {
        return response()->json(Paciente::all());
    }

    public function store(Request $request) {
        $data = $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'dni' => 'required|string|unique:pacientes',
            'fecha_nacimiento' => 'required|date',
            'genero' => 'required|string',
            'telefono' => 'required|string',
            'correo' => 'required|email|unique:pacientes',
            'direccion' => 'required|string',
            'tipo_sangre' => 'required|string',
        ]);
        $paciente = Paciente::create($data);
        return response()->json(['mensaje' => 'Paciente creado', 'data' => $paciente], 201);
    }

    public function show($id) {
        $paciente = Paciente::find($id);
        if (!$paciente) return response()->json(['mensaje' => 'No encontrado'], 404);
        return response()->json($paciente);
    }

    public function update(Request $request, $id) {
        $paciente = Paciente::find($id);
        if (!$paciente) return response()->json(['mensaje' => 'No encontrado'], 404);
        $paciente->update($request->all());
        return response()->json(['mensaje' => 'Paciente actualizado', 'data' => $paciente]);
    }

    public function destroy($id) {
        $paciente = Paciente::find($id);
        if (!$paciente) return response()->json(['mensaje' => 'No encontrado'], 404);
        $paciente->delete();
        return response()->json(['mensaje' => 'Paciente eliminado']);
    }
}