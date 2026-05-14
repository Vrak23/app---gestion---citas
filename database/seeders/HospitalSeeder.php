<?php

namespace Database\Seeders;

use App\Models\Cita;
use App\Models\Diagnostico;
use App\Models\Medicamento;
use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Tratamiento;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    public function run(): void
    {
        $medicosData = [
            ['Ricardo', 'Mendez', 'Cardiologia', '987654321', 'ricardo.mendez@sanar.app', 'CMP-10001', 12, 'Lunes a Viernes 08:00-14:00'],
            ['Lucia', 'Garcia', 'Pediatria', '987654322', 'lucia.garcia@sanar.app', 'CMP-10002', 9, 'Lunes a Sabado 09:00-13:00'],
            ['Carlos', 'Ruiz', 'Dermatologia', '987654323', 'carlos.ruiz@sanar.app', 'CMP-10003', 7, 'Martes a Viernes 10:00-16:00'],
            ['Elena', 'Torres', 'Neurologia', '987654324', 'elena.torres@sanar.app', 'CMP-10004', 15, 'Lunes a Jueves 14:00-20:00'],
            ['Miguel', 'Angel', 'Ginecologia', '987654325', 'miguel.angel@sanar.app', 'CMP-10005', 11, 'Lunes a Viernes 08:00-13:00'],
            ['Sofia', 'Luna', 'Oftalmologia', '987654326', 'sofia.luna@sanar.app', 'CMP-10006', 8, 'Martes a Sabado 08:00-12:00'],
            ['Jorge', 'Herrera', 'Traumatologia', '987654327', 'jorge.herrera@sanar.app', 'CMP-10007', 14, 'Lunes a Viernes 15:00-21:00'],
            ['Patricia', 'Sol', 'Psiquiatria', '987654328', 'patricia.sol@sanar.app', 'CMP-10008', 10, 'Lunes a Viernes 09:00-15:00'],
            ['Andres', 'Castro', 'Urologia', '987654329', 'andres.castro@sanar.app', 'CMP-10009', 13, 'Miercoles a Sabado 08:00-14:00'],
            ['Isabel', 'Alba', 'Oncologia', '987654330', 'isabel.alba@sanar.app', 'CMP-10010', 16, 'Lunes a Viernes 07:00-13:00'],
        ];

        foreach ($medicosData as $medico) {
            Medico::create([
                'nombre' => $medico[0],
                'apellido' => $medico[1],
                'especialidad' => $medico[2],
                'telefono' => $medico[3],
                'correo' => $medico[4],
                'licencia' => $medico[5],
                'anios_experiencia' => $medico[6],
                'horario_atencion' => $medico[7],
            ]);
        }

        $pacientesData = [
            ['Juan', 'Perez', '001661085', '1990-04-12', 'Masculino', '912345671', 'juan.perez@gmail.com', 'Av. Los Olivos 120', 'O+'],
            ['Maria', 'Lopez', '001661086', '1988-09-23', 'Femenino', '912345672', 'maria.lopez@gmail.com', 'Jr. Lima 345', 'A+'],
            ['Carlos', 'Sosa', '001661087', '1979-01-18', 'Masculino', '912345673', 'carlos.sosa@gmail.com', 'Calle San Martin 220', 'B+'],
            ['Ana', 'Belen', '001661088', '1995-07-04', 'Femenino', '912345674', 'ana.belen@gmail.com', 'Av. Arequipa 700', 'AB+'],
            ['Pedro', 'Campos', '001661089', '1983-11-30', 'Masculino', '912345675', 'pedro.campos@gmail.com', 'Av. Grau 440', 'O-'],
            ['Laura', 'Palmer', '001661090', '1992-02-16', 'Femenino', '912345676', 'laura.palmer@gmail.com', 'Jr. Cusco 118', 'A-'],
            ['Roberto', 'Gomez', '001661091', '1975-06-21', 'Masculino', '912345677', 'roberto.gomez@gmail.com', 'Av. Brasil 900', 'B-'],
            ['Julia', 'Robles', '001661092', '2000-12-08', 'Femenino', '912345678', 'julia.robles@gmail.com', 'Calle Primavera 55', 'AB-'],
            ['Diego', 'Mendoza', '001661093', '1986-03-14', 'Masculino', '912345679', 'diego.mendoza@gmail.com', 'Av. Colonial 610', 'O+'],
            ['Shakira', 'Mebarak', '001661094', '1991-10-02', 'Femenino', '912345680', 'shakira.mebarak@gmail.com', 'Jr. Puno 330', 'A+'],
        ];

        foreach ($pacientesData as $paciente) {
            Paciente::create([
                'nombre' => $paciente[0],
                'apellido' => $paciente[1],
                'dni' => $paciente[2],
                'fecha_nacimiento' => $paciente[3],
                'genero' => $paciente[4],
                'telefono' => $paciente[5],
                'correo' => $paciente[6],
                'direccion' => $paciente[7],
                'tipo_sangre' => $paciente[8],
            ]);
        }

        $motivos = [
            'Chequeo general',
            'Dolor abdominal',
            'Control dermatologico',
            'Cefalea persistente',
            'Control prenatal',
            'Vision borrosa',
            'Lesion deportiva',
            'Ansiedad y estres',
            'Molestia urinaria',
            'Evaluacion oncologica',
        ];

        $medicos = Medico::all()->values();
        $pacientes = Paciente::all()->values();

        for ($i = 0; $i < 10; $i++) {
            Cita::create([
                'id_paciente' => $pacientes[$i]->id_paciente,
                'id_medico' => $medicos[$i]->id_medico,
                'fecha_cita' => Carbon::now()->addDays($i + 1)->format('Y-m-d'),
                'hora_cita' => sprintf('%02d:00:00', 8 + ($i % 8)),
                'estado' => 'Confirmada',
                'motivo' => $motivos[$i],
                'observaciones' => 'Paciente registrado para evaluacion medica.',
                'sala' => 'Consultorio ' . (101 + $i),
            ]);
        }

        $citas = Cita::with(['paciente', 'medico'])->get();

        foreach ($citas as $cita) {
            Diagnostico::create([
                'id_cita' => $cita->id_cita,
                'id_paciente' => $cita->id_paciente,
                'id_medico' => $cita->id_medico,
                'descripcion' => 'Evaluacion relacionada con ' . $cita->motivo . '.',
                'fecha' => $cita->fecha_cita,
                'gravedad' => 'Leve',
                'recomendaciones' => 'Control ambulatorio y seguimiento segun evolucion.',
                'tipo_diagnostico' => 'Presuntivo',
                'observaciones' => 'Sin signos de alarma al momento de la consulta.',
            ]);
        }

        $diagnosticos = Diagnostico::all()->values();

        foreach ($diagnosticos as $index => $diagnostico) {
            Tratamiento::create([
                'id_diagnostico' => $diagnostico->id_diagnostico,
                'id_medico' => $diagnostico->id_medico,
                'nombre_tratamiento' => 'Plan terapeutico ' . ($index + 1),
                'descripcion' => 'Tratamiento indicado segun evaluacion clinica.',
                'duracion' => '15 dias',
                'estado' => 'Activo',
                'frecuencia_administracion' => 'Cada 8 horas',
                'indicaciones' => 'Cumplir dosis, hidratarse y acudir a control.',
            ]);
        }

        $medicamentos = [
            ['Paracetamol', '500 mg', 'Cada 8 horas', '5 dias', 'BioHealth Labs', 'Nauseas leves'],
            ['Ibuprofeno', '400 mg', 'Cada 12 horas', '3 dias', 'MediPlus', 'Irritacion gastrica'],
            ['Amoxicilina', '500 mg', 'Cada 8 horas', '7 dias', 'FarmaAndes', 'Alergia en pacientes sensibles'],
            ['Omeprazol', '20 mg', 'Cada 24 horas', '10 dias', 'Salud Total', 'Dolor abdominal leve'],
            ['Loratadina', '10 mg', 'Cada 24 horas', '5 dias', 'BioHealth Labs', 'Somnolencia ocasional'],
            ['Metformina', '850 mg', 'Cada 12 horas', '30 dias', 'MediPlus', 'Malestar digestivo'],
            ['Atorvastatina', '20 mg', 'Cada 24 horas', '30 dias', 'FarmaAndes', 'Dolor muscular'],
            ['Losartan', '50 mg', 'Cada 24 horas', '30 dias', 'Salud Total', 'Mareo ocasional'],
            ['Sertralina', '50 mg', 'Cada 24 horas', '30 dias', 'BioHealth Labs', 'Insomnio leve'],
            ['Salbutamol', '100 mcg', 'Segun necesidad', '7 dias', 'MediPlus', 'Temblor leve'],
        ];

        $tratamientos = Tratamiento::all()->values();

        foreach ($medicamentos as $index => $medicamento) {
            Medicamento::create([
                'id_tratamiento' => $tratamientos[$index]->id_tratamiento,
                'nombre' => $medicamento[0],
                'dosis' => $medicamento[1],
                'frecuencia' => $medicamento[2],
                'duracion' => $medicamento[3],
                'proveedor' => $medicamento[4],
                'efectos_secundarios' => $medicamento[5],
            ]);
        }
    }
}
