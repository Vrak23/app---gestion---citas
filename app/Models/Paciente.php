<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['dni', 'nombre', 'email', 'fecha_nacimiento', 'genero'];

    public function citas() { return $this->hasMany(Cita::class); }
}
