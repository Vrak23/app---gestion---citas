<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $table = 'tratamientos';

    protected $primaryKey = 'id_tratamiento';

    protected $fillable = [
        'id_diagnostico',
        'nombre_tratamiento',
        'duracion',
        'indicaciones',
    ];

    public function diagnostico()
    {
        return $this->belongsTo(Diagnostico::class, 'id_diagnostico');
    }

    public function medicamentos()
    {
        return $this->hasMany(Medicamento::class, 'id_tratamiento');
    }
}