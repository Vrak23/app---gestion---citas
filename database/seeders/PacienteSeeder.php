<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pacientes')->insert([
            ['nombre'=>'Carlos','apellido'=>'Quispe','dni'=>'12345678','fecha_nacimiento'=>'1990-05-12','genero'=>'Masculino','telefono'=>'987654321','correo'=>'carlos.quispe@gmail.com','direccion'=>'Av. Lima 123','tipo_sangre'=>'O+'],
            ['nombre'=>'María','apellido'=>'Torres','dni'=>'23456789','fecha_nacimiento'=>'1985-08-20','genero'=>'Femenino','telefono'=>'976543210','correo'=>'maria.torres@gmail.com','direccion'=>'Jr. Cusco 456','tipo_sangre'=>'A+'],
            ['nombre'=>'Luis','apellido'=>'Flores','dni'=>'34567890','fecha_nacimiento'=>'1992-03-15','genero'=>'Masculino','telefono'=>'965432109','correo'=>'luis.flores@gmail.com','direccion'=>'Calle Arequipa 789','tipo_sangre'=>'B+'],
            ['nombre'=>'Ana','apellido'=>'Mamani','dni'=>'45678901','fecha_nacimiento'=>'1988-11-30','genero'=>'Femenino','telefono'=>'954321098','correo'=>'ana.mamani@gmail.com','direccion'=>'Av. Tacna 321','tipo_sangre'=>'AB+'],
            ['nombre'=>'Jorge','apellido'=>'Huanca','dni'=>'56789012','fecha_nacimiento'=>'1995-07-22','genero'=>'Masculino','telefono'=>'943210987','correo'=>'jorge.huanca@gmail.com','direccion'=>'Jr. Puno 654','tipo_sangre'=>'O-'],
            ['nombre'=>'Rosa','apellido'=>'Condori','dni'=>'67890123','fecha_nacimiento'=>'1993-01-10','genero'=>'Femenino','telefono'=>'932109876','correo'=>'rosa.condori@gmail.com','direccion'=>'Av. Miraflores 987','tipo_sangre'=>'A-'],
            ['nombre'=>'Pedro','apellido'=>'Vargas','dni'=>'78901234','fecha_nacimiento'=>'1980-09-05','genero'=>'Masculino','telefono'=>'921098765','correo'=>'pedro.vargas@gmail.com','direccion'=>'Calle San Juan 147','tipo_sangre'=>'B-'],
            ['nombre'=>'Lucia','apellido'=>'Apaza','dni'=>'89012345','fecha_nacimiento'=>'1997-04-18','genero'=>'Femenino','telefono'=>'910987654','correo'=>'lucia.apaza@gmail.com','direccion'=>'Jr. Junin 258','tipo_sangre'=>'AB-'],
            ['nombre'=>'Miguel','apellido'=>'Ramos','dni'=>'90123456','fecha_nacimiento'=>'1991-12-25','genero'=>'Masculino','telefono'=>'909876543','correo'=>'miguel.ramos@gmail.com','direccion'=>'Av. Piura 369','tipo_sangre'=>'O+'],
            ['nombre'=>'Elena','apellido'=>'Gutierrez','dni'=>'01234567','fecha_nacimiento'=>'1986-06-14','genero'=>'Femenino','telefono'=>'898765432','correo'=>'elena.gutierrez@gmail.com','direccion'=>'Calle Ica 741','tipo_sangre'=>'A+'],
        ]);
    }
}