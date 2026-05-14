<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_paciente';

    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'fecha_nacimiento',
        'genero',
        'telefono',
        'correo',
        'direccion',
        'tipo_sangre',
    ];

    public function citas()
    {
        return $this->hasMany(Cita::class, 'id_paciente', 'id_paciente');
    }

    public function diagnosticos()
    {
        return $this->hasMany(Diagnostico::class, 'id_paciente', 'id_paciente');
    }
}
