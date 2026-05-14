<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_tratamiento';

    protected $fillable = [
        'id_diagnostico',
        'id_medico',
        'nombre_tratamiento',
        'descripcion',
        'duracion',
        'estado',
        'frecuencia_administracion',
        'indicaciones',
    ];

    public function diagnostico()
    {
        return $this->belongsTo(Diagnostico::class, 'id_diagnostico', 'id_diagnostico');
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'id_medico', 'id_medico');
    }

    public function medicamentos()
    {
        return $this->hasMany(Medicamento::class, 'id_tratamiento', 'id_tratamiento');
    }
}
