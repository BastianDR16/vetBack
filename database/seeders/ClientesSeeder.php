<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; // Añade esta línea para importar la clase Str

class ClientesSeeder extends Seeder
{
    public function run()
    {
        // Crear un cliente de ejemplo
        DB::table('clientes')->insert([
            'nombre' => 'Ejemplo',
            'apellido' => 'Cliente',
            'correo_electronico' => 'cliente@example.com',
            'telefono' => '123456789',
            'password' => Hash::make('contraseña'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Puedes agregar más clientes aquí según sea necesario
    }
}
