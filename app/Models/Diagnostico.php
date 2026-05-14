<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_diagnostico';

    protected $fillable = [
        'id_cita',
        'id_paciente',
        'id_medico',
        'descripcion',
        'fecha',
        'gravedad',
        'recomendaciones',
        'tipo_diagnostico',
        'observaciones',
    ];

    public function cita()
    {
        return $this->belongsTo(Cita::class, 'id_cita', 'id_cita');
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente', 'id_paciente');
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'id_medico', 'id_medico');
    }

    public function tratamientos()
    {
        return $this->hasMany(Tratamiento::class, 'id_diagnostico', 'id_diagnostico');
    }
}
