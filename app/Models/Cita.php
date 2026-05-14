<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_cita';

    protected $fillable = [
        'id_paciente',
        'id_medico',
        'fecha_cita',
        'hora_cita',
        'estado',
        'motivo',
        'observaciones',
        'sala',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente', 'id_paciente');
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'id_medico', 'id_medico');
    }

    public function diagnostico()
    {
        return $this->hasOne(Diagnostico::class, 'id_cita', 'id_cita');
    }
}
