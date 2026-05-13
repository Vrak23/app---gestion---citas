<?php
namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    public function index() {
        return response()->json(Medicamento::with('tratamiento')->get());
    }

    public function store(Request $request) {
        $data = $request->validate([
            'id_tratamiento' => 'required|exists:tratamientos,id_tratamiento',
            'nombre' => 'required|string',
            'dosis' => 'required|string',
            'frecuencia' => 'required|string',
            'duracion' => 'required|string',
            'proveedor' => 'nullable|string',
            'efectos_secundarios' => 'nullable|string',
        ]);
        $medicamento = Medicamento::create($data);
        return response()->json(['mensaje' => 'Medicamento creado', 'data' => $medicamento], 201);
    }

    public function show($id) {
        $medicamento = Medicamento::with('tratamiento')->find($id);
        if (!$medicamento) return response()->json(['mensaje' => 'No encontrado'], 404);
        return response()->json($medicamento);
    }

    public function update(Request $request, $id) {
        $medicamento = Medicamento::find($id);
        if (!$medicamento) return response()->json(['mensaje' => 'No encontrado'], 404);
        $medicamento->update($request->all());
        return response()->json(['mensaje' => 'Medicamento actualizado', 'data' => $medicamento]);
    }

    public function destroy($id) {
        $medicamento = Medicamento::find($id);
        if (!$medicamento) return response()->json(['mensaje' => 'No encontrado'], 404);
        $medicamento->delete();
        return response()->json(['mensaje' => 'Medicamento eliminado']);
    }
}