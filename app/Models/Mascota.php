<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{

    protected $table = 'mascotas';

    protected $fillable = [
        'nombre', 'fecha_nacimiento', 'especie', 'raza', 'color', 'peso', 'altura',
        'diagnostico', 'tratamiento', 'notas_adicionales', 'id_cliente',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
}