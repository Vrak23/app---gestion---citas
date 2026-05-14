<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $fillable = ['diagnostico_id', 'nombre', 'duracion', 'indicaciones'];

    public function diagnostico() { return $this->belongsTo(Diagnostico::class); }
}
