<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Veterinario extends Model
{
    protected $table = 'veterinarios';

    protected $fillable = [
        'nombre', 'apellido', 'correo_electronico', 'telefono', 'password', 'remember_token',
    ];
}