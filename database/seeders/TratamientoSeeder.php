<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TratamientoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tratamientos')->insert([
            ['id_diagnostico'=>1,'id_medico'=>1,'nombre_tratamiento'=>'Control cardíaco','descripcion'=>'Monitoreo y medicación','duracion'=>'3 meses','estado'=>'activo','frecuencia_administracion'=>'Diaria','indicaciones'=>'Tomar medicamento en ayunas'],
            ['id_diagnostico'=>2,'id_medico'=>2,'nombre_tratamiento'=>'Vacunación pediátrica','descripcion'=>'Aplicación de vacunas','duracion'=>'1 mes','estado'=>'completado','frecuencia_administracion'=>'Única','indicaciones'=>'Aplicar según calendario'],
            ['id_diagnostico'=>3,'id_medico'=>3,'nombre_tratamiento'=>'Terapia antimigraña','descripcion'=>'Medicación y relajación','duracion'=>'2 meses','estado'=>'activo','frecuencia_administracion'=>'Interdiaria','indicaciones'=>'Evitar pantallas prolongadas'],
            ['id_diagnostico'=>4,'id_medico'=>4,'nombre_tratamiento'=>'Tratamiento dermatológico','descripcion'=>'Cremas y antihistamínicos','duracion'=>'1 mes','estado'=>'activo','frecuencia_administracion'=>'2 veces al día','indicaciones'=>'Aplicar crema tras lavado'],
            ['id_diagnostico'=>5,'id_medico'=>5,'nombre_tratamiento'=>'Fisioterapia de rodilla','descripcion'=>'Ejercicios y ultrasonido','duracion'=>'6 semanas','estado'=>'activo','frecuencia_administracion'=>'3 veces por semana','indicaciones'=>'Reposo entre sesiones'],
            ['id_diagnostico'=>6,'id_medico'=>6,'nombre_tratamiento'=>'Control ginecológico','descripcion'=>'Seguimiento anual','duracion'=>'1 año','estado'=>'activo','frecuencia_administracion'=>'Anual','indicaciones'=>'Control cada 12 meses'],
            ['id_diagnostico'=>7,'id_medico'=>7,'nombre_tratamiento'=>'Corrección visual','descripcion'=>'Uso de lentes correctivos','duracion'=>'Permanente','estado'=>'activo','frecuencia_administracion'=>'Diaria','indicaciones'=>'Usar lentes siempre'],
            ['id_diagnostico'=>8,'id_medico'=>8,'nombre_tratamiento'=>'Levotiroxina','descripcion'=>'Hormona tiroidea sintética','duracion'=>'Indefinido','estado'=>'activo','frecuencia_administracion'=>'Diaria','indicaciones'=>'Tomar en ayunas 30 min antes'],
            ['id_diagnostico'=>9,'id_medico'=>9,'nombre_tratamiento'=>'Tratamiento gástrico','descripcion'=>'Inhibidores de ácido','duracion'=>'2 meses','estado'=>'activo','frecuencia_administracion'=>'2 veces al día','indicaciones'=>'Tomar antes de comidas'],
            ['id_diagnostico'=>10,'id_medico'=>10,'nombre_tratamiento'=>'Terapia psicológica','descripcion'=>'Sesiones cognitivo-conductuales','duracion'=>'6 meses','estado'=>'activo','frecuencia_administracion'=>'Semanal','indicaciones'=>'Asistir puntualmente'],
        ]);
    }
}