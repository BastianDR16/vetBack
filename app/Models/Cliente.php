<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nombre', 'apellido', 'correo_electronico', 'telefono', 'password', 'remember_token', 'cita',
    ];

    public function mascotas()
    {
        return $this->hasMany(Mascota::class);
    }
}
