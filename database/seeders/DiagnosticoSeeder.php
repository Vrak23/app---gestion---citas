<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiagnosticoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('diagnosticos')->insert([
            ['id_cita'=>1,'id_paciente'=>1,'id_medico'=>1,'descripcion'=>'Arritmia leve','fecha'=>'2026-05-01 08:30:00','gravedad'=>'Moderada','recomendaciones'=>'Reposo y medicación','tipo_diagnostico'=>'Cardiológico','observaciones'=>'Seguimiento en 1 mes'],
            ['id_cita'=>2,'id_paciente'=>2,'id_medico'=>2,'descripcion'=>'Desarrollo normal','fecha'=>'2026-05-02 09:30:00','gravedad'=>'Leve','recomendaciones'=>'Vacunas al día','tipo_diagnostico'=>'Pediátrico','observaciones'=>'Sin observaciones'],
            ['id_cita'=>3,'id_paciente'=>3,'id_medico'=>3,'descripcion'=>'Migraña tensional','fecha'=>'2026-05-03 10:30:00','gravedad'=>'Moderada','recomendaciones'=>'Evitar estrés','tipo_diagnostico'=>'Neurológico','observaciones'=>'Solicitar resonancia'],
            ['id_cita'=>4,'id_paciente'=>4,'id_medico'=>4,'descripcion'=>'Dermatitis alérgica','fecha'=>'2026-05-04 11:30:00','gravedad'=>'Leve','recomendaciones'=>'Evitar alérgenos','tipo_diagnostico'=>'Dermatológico','observaciones'=>'Aplicar crema indicada'],
            ['id_cita'=>5,'id_paciente'=>5,'id_medico'=>5,'descripcion'=>'Tendinitis rotuliana','fecha'=>'2026-05-05 09:00:00','gravedad'=>'Moderada','recomendaciones'=>'Fisioterapia','tipo_diagnostico'=>'Traumatológico','observaciones'=>'Reposo deportivo'],
            ['id_cita'=>6,'id_paciente'=>6,'id_medico'=>6,'descripcion'=>'Control ginecológico normal','fecha'=>'2026-05-06 10:00:00','gravedad'=>'Leve','recomendaciones'=>'Control anual','tipo_diagnostico'=>'Ginecológico','observaciones'=>'Sin novedad'],
            ['id_cita'=>7,'id_paciente'=>7,'id_medico'=>7,'descripcion'=>'Miopía leve','fecha'=>'2026-05-07 11:00:00','gravedad'=>'Leve','recomendaciones'=>'Usar lentes','tipo_diagnostico'=>'Oftalmológico','observaciones'=>'Receta de lentes'],
            ['id_cita'=>8,'id_paciente'=>8,'id_medico'=>8,'descripcion'=>'Hipotiroidismo','fecha'=>'2026-05-08 12:00:00','gravedad'=>'Moderada','recomendaciones'=>'Medicación diaria','tipo_diagnostico'=>'Endocrinológico','observaciones'=>'Control mensual'],
            ['id_cita'=>9,'id_paciente'=>9,'id_medico'=>9,'descripcion'=>'Gastritis crónica','fecha'=>'2026-05-09 08:30:00','gravedad'=>'Moderada','recomendaciones'=>'Dieta blanda','tipo_diagnostico'=>'Gastroenterológico','observaciones'=>'Evitar picantes'],
            ['id_cita'=>10,'id_paciente'=>10,'id_medico'=>10,'descripcion'=>'Trastorno de ansiedad','fecha'=>'2026-05-10 09:30:00','gravedad'=>'Moderada','recomendaciones'=>'Terapia cognitiva','tipo_diagnostico'=>'Psiquiátrico','observaciones'=>'Sesiones semanales'],
        ]);
    }
}