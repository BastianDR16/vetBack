<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo_electronico')->unique();
            $table->string('telefono');
            $table->string('password');
            $table->boolean('cita')->default(false); // Nueva columna cita
            $table->rememberToken();
            // Otros campos según sea necesario
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
