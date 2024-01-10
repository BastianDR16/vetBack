<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; // Añade esta línea para importar la clase Str

class VeterinariosSeeder extends Seeder
{
    public function run()
    {
        // Crear un veterinario de ejemplo
        DB::table('veterinarios')->insert([
            'nombre' => 'Ejemplo',
            'apellido' => 'Veterinario',
            'correo_electronico' => 'veterinario@example.com',
            'telefono' => '987654321',
            'password' => Hash::make('contraseña'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Puedes agregar más veterinarios aquí según sea necesario
    }
}
