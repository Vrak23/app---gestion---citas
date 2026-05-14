<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('medicos')->insert([
            ['nombre'=>'Roberto','apellido'=>'Salas','especialidad'=>'Cardiología','telefono'=>'987111222','correo'=>'roberto.salas@sanar.pe','licencia'=>'CMP-12345','anios_experiencia'=>15,'horario_atencion'=>'Lun-Vie 8:00-14:00'],
            ['nombre'=>'Patricia','apellido'=>'Mendoza','especialidad'=>'Pediatría','telefono'=>'976222333','correo'=>'patricia.mendoza@sanar.pe','licencia'=>'CMP-23456','anios_experiencia'=>10,'horario_atencion'=>'Lun-Vie 9:00-15:00'],
            ['nombre'=>'Fernando','apellido'=>'Castro','especialidad'=>'Neurología','telefono'=>'965333444','correo'=>'fernando.castro@sanar.pe','licencia'=>'CMP-34567','anios_experiencia'=>12,'horario_atencion'=>'Mar-Sab 8:00-14:00'],
            ['nombre'=>'Carmen','apellido'=>'Vega','especialidad'=>'Dermatología','telefono'=>'954444555','correo'=>'carmen.vega@sanar.pe','licencia'=>'CMP-45678','anios_experiencia'=>8,'horario_atencion'=>'Lun-Vie 10:00-16:00'],
            ['nombre'=>'Ricardo','apellido'=>'Paredes','especialidad'=>'Traumatología','telefono'=>'943555666','correo'=>'ricardo.paredes@sanar.pe','licencia'=>'CMP-56789','anios_experiencia'=>20,'horario_atencion'=>'Lun-Vie 7:00-13:00'],
            ['nombre'=>'Gloria','apellido'=>'Rios','especialidad'=>'Ginecología','telefono'=>'932666777','correo'=>'gloria.rios@sanar.pe','licencia'=>'CMP-67890','anios_experiencia'=>18,'horario_atencion'=>'Lun-Sab 8:00-14:00'],
            ['nombre'=>'Hector','apellido'=>'Luna','especialidad'=>'Oftalmología','telefono'=>'921777888','correo'=>'hector.luna@sanar.pe','licencia'=>'CMP-78901','anios_experiencia'=>9,'horario_atencion'=>'Mar-Vie 9:00-15:00'],
            ['nombre'=>'Silvia','apellido'=>'Mora','especialidad'=>'Endocrinología','telefono'=>'910888999','correo'=>'silvia.mora@sanar.pe','licencia'=>'CMP-89012','anios_experiencia'=>11,'horario_atencion'=>'Lun-Vie 8:00-14:00'],
            ['nombre'=>'Andres','apellido'=>'Peña','especialidad'=>'Gastroenterología','telefono'=>'909999000','correo'=>'andres.pena@sanar.pe','licencia'=>'CMP-90123','anios_experiencia'=>14,'horario_atencion'=>'Lun-Vie 9:00-15:00'],
            ['nombre'=>'Claudia','apellido'=>'Soto','especialidad'=>'Psiquiatría','telefono'=>'898000111','correo'=>'claudia.soto@sanar.pe','licencia'=>'CMP-01234','anios_experiencia'=>7,'horario_atencion'=>'Lun-Vie 10:00-16:00'],
        ]);
    }
}