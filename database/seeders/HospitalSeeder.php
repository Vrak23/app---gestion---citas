<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Cita;
use App\Models\Diagnostico;
use App\Models\Tratamiento;
use App\Models\Medicamento;
use Carbon\Carbon;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Médicos (10)
        $especialidades = ['Cardiología', 'Pediatría', 'Dermatología', 'Neurología', 'Ginecología', 'Oftalmología', 'Traumatología', 'Psiquiatría', 'Urología', 'Oncología'];
        $nombres_medicos = ['Dr. Ricardo Méndez', 'Dra. Lucía García', 'Dr. Carlos Ruiz', 'Dra. Elena Torres', 'Dr. Miguel Ángel', 'Dra. Sofía Luna', 'Dr. Jorge Herrera', 'Dra. Patricia Sol', 'Dr. Andrés Castro', 'Dra. Isabel Alba'];

        foreach ($nombres_medicos as $index => $nombre) {
            Medico::create([
                'nombre' => $nombre,
                'especialidad' => $especialidades[$index],
                'email' => strtolower(str_replace([' ', '.'], '', $nombre)) . '@sanar.app',
                'telefono' => '9' . rand(10000000, 99999999),
            ]);
        }

        // 2. Pacientes (10)
        $nombres_pacientes = ['Juan Pérez', 'María López', 'Carlos Sosa', 'Ana Belén', 'Pedro Picapiedra', 'Laura Palmer', 'Roberto Gómez', 'Julia Roberts', 'Diego Maradona', 'Shakira Mebarak'];
        $dnis = ['001661085', '001661086', '001661087', '001661088', '001661089', '001661090', '001661091', '001661092', '001661093', '001661094'];

        foreach ($nombres_pacientes as $index => $nombre) {
            Paciente::create([
                'dni' => $dnis[$index],
                'nombre' => $nombre,
                'email' => strtolower(explode(' ', $nombre)[0]) . $index . '@gmail.com',
                'fecha_nacimiento' => Carbon::now()->subYears(rand(20, 60))->format('Y-m-d'),
                'genero' => $index % 2 == 0 ? 'Masculino' : 'Femenino',
            ]);
        }

        // 3. Citas (10)
        $motivos = ['Chequeo General', 'Consulta por Dolor', 'Seguimiento', 'Resultados Laboratorio', 'Vacunación', 'Control Prenatal', 'Lesión Deportiva', 'Estrés y Ansiedad', 'Visión Borrosa', 'Molestia Urinaria'];
        $medicos = Medico::all();
        $pacientes = Paciente::all();

        for ($i = 0; $i < 10; $i++) {
            Cita::create([
                'paciente_id' => $pacientes[$i]->id,
                'medico_id' => $medicos[$i]->id,
                'fecha_hora' => Carbon::now()->addDays(rand(1, 30))->setHour(rand(8, 17))->setMinute(0),
                'motivo' => $motivos[$i],
                'sala_tipo' => $i % 2 == 0 ? 'Fisica' : 'Virtual',
                'sala_nombre' => $i % 2 == 0 ? 'Consultorio ' . (100 + $i) : 'https://zoom.us/j/' . rand(1000, 9999),
                'estado' => 'Confirmada',
            ]);
        }

        // 4. Diagnósticos (10)
        $citas = Cita::all();
        foreach ($citas as $cita) {
            Diagnostico::create([
                'cita_id' => $cita->id,
                'descripcion' => 'Paciente presenta síntomas de ' . $cita->motivo . '. Se recomienda observación.',
                'observaciones' => 'No presenta alergias conocidas.',
            ]);
        }

        // 5. Tratamientos (10)
        $diagnosticos = Diagnostico::all();
        foreach ($diagnosticos as $diag) {
            Tratamiento::create([
                'diagnostico_id' => $diag->id,
                'nombre' => 'Tratamiento de recuperación para ' . $diag->cita->motivo,
                'duracion' => '15 días',
                'indicaciones' => 'Tomar abundante agua y guardar reposo.',
            ]);
        }

        // 6. Medicamentos (10)
        $meds = ['Paracetamol', 'Ibuprofeno', 'Amoxicilina', 'Omeprazol', 'Loratadina', 'Metformina', 'Atorvastatina', 'Losartán', 'Sertralina', 'Salbutamol'];
        foreach ($meds as $nombre_med) {
            Medicamento::create([
                'nombre' => $nombre_med,
                'gramaje' => rand(5, 500) . 'mg',
                'laboratorio' => 'BioHealth Labs',
                'stock' => rand(50, 200),
            ]);
        }
    }
}
