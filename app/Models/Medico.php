<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_medico';

    protected $fillable = [
        'nombre',
        'apellido',
        'especialidad',
        'telefono',
        'correo',
        'licencia',
        'anios_experiencia',
        'horario_atencion',
    ];

    public function citas()
    {
        return $this->hasMany(Cita::class, 'id_medico', 'id_medico');
    }

    public function diagnosticos()
    {
        return $this->hasMany(Diagnostico::class, 'id_medico', 'id_medico');
    }

    public function tratamientos()
    {
        return $this->hasMany(Tratamiento::class, 'id_medico', 'id_medico');
    }
}
