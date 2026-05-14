<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $fillable = ['cita_id', 'descripcion', 'observaciones'];

    public function cita() { return $this->belongsTo(Cita::class); }
    public function tratamiento() { return $this->hasOne(Tratamiento::class); }
}
