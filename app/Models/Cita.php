<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = ['paciente_id', 'medico_id', 'fecha_hora', 'motivo', 'sala_tipo', 'sala_nombre', 'estado'];

    public function paciente() { return $this->belongsTo(Paciente::class); }
    public function medico() { return $this->belongsTo(Medico::class); }
    public function diagnostico() { return $this->hasOne(Diagnostico::class); }
}
