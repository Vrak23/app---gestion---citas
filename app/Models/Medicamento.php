<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $table = 'medicamentos';
    protected $primaryKey = 'id_medicamento';

    protected $fillable = [
        'id_tratamiento', 'nombre', 'dosis', 'frecuencia',
        'duracion', 'proveedor', 'efectos_secundarios'
    ];

    public function tratamiento() {
        return $this->belongsTo(Tratamiento::class, 'id_tratamiento');
    }
}