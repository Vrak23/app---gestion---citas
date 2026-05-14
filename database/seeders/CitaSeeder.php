<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('citas')->insert([
            ['id_paciente'=>1,'id_medico'=>1,'fecha_cita'=>'2026-05-01','hora_cita'=>'08:00:00','estado'=>'atendida','motivo'=>'Dolor en el pecho','observaciones'=>'Paciente estable','sala'=>'A1'],
            ['id_paciente'=>2,'id_medico'=>2,'fecha_cita'=>'2026-05-02','hora_cita'=>'09:00:00','estado'=>'atendida','motivo'=>'Control pediátrico','observaciones'=>'Desarrollo normal','sala'=>'B2'],
            ['id_paciente'=>3,'id_medico'=>3,'fecha_cita'=>'2026-05-03','hora_cita'=>'10:00:00','estado'=>'atendida','motivo'=>'Migraña frecuente','observaciones'=>'Requiere estudios','sala'=>'C3'],
            ['id_paciente'=>4,'id_medico'=>4,'fecha_cita'=>'2026-05-04','hora_cita'=>'11:00:00','estado'=>'atendida','motivo'=>'Erupciones en la piel','observaciones'=>'Posible alergia','sala'=>'D4'],
            ['id_paciente'=>5,'id_medico'=>5,'fecha_cita'=>'2026-05-05','hora_cita'=>'08:30:00','estado'=>'atendida','motivo'=>'Dolor de rodilla','observaciones'=>'Inflamación leve','sala'=>'A2'],
            ['id_paciente'=>6,'id_medico'=>6,'fecha_cita'=>'2026-05-06','hora_cita'=>'09:30:00','estado'=>'atendida','motivo'=>'Control ginecológico','observaciones'=>'Sin novedad','sala'=>'B3'],
            ['id_paciente'=>7,'id_medico'=>7,'fecha_cita'=>'2026-05-07','hora_cita'=>'10:30:00','estado'=>'confirmada','motivo'=>'Visión borrosa','observaciones'=>'Pendiente de examen','sala'=>'C4'],
            ['id_paciente'=>8,'id_medico'=>8,'fecha_cita'=>'2026-05-08','hora_cita'=>'11:30:00','estado'=>'confirmada','motivo'=>'Control de tiroides','observaciones'=>'Resultados en espera','sala'=>'D1'],
            ['id_paciente'=>9,'id_medico'=>9,'fecha_cita'=>'2026-05-09','hora_cita'=>'08:00:00','estado'=>'pendiente','motivo'=>'Dolor abdominal','observaciones'=>'Primera consulta','sala'=>'A3'],
            ['id_paciente'=>10,'id_medico'=>10,'fecha_cita'=>'2026-05-10','hora_cita'=>'09:00:00','estado'=>'pendiente','motivo'=>'Ansiedad y estrés','observaciones'=>'Primera consulta','sala'=>'B1'],
        ]);
    }
}