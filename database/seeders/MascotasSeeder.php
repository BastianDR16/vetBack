<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Añade esta línea para importar la clase Hash
use Illuminate\Support\Str;

class MascotasSeeder extends Seeder
{
    public function run()
    {
        // Crear una mascota de ejemplo asociada a un cliente
        $clienteId = DB::table('clientes')->insertGetId([
            'nombre' => 'Dueño',
            'apellido' => 'Mascota',
            'correo_electronico' => 'dueno@example.com',
            'telefono' => '111111111',
            'password' => Hash::make('contraseña'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('mascotas')->insert([
            'nombre' => 'Mascota1',
            'fecha_nacimiento' => '2022-01-01',
            'especie' => 'Perro',
            'raza' => 'Labrador',
            'color' => 'Negro',
            'peso' => 10.5,
            'altura' => 0.6,
            'diagnostico' => 'Saludable',
            'tratamiento' => 'Ninguno',
            'notas_adicionales' => 'Ninguna',
            'id_cliente' => $clienteId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Puedes agregar más mascotas aquí según sea necesario
    }
}
