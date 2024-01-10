<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTable extends Migration
{
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha_nacimiento');
            $table->string('especie');
            $table->string('raza');
            $table->string('color');
            $table->float('peso')->nullable();
            $table->float('altura')->nullable();
            $table->text('diagnostico')->nullable();
            $table->text('tratamiento')->nullable();
            $table->text('notas_adicionales')->nullable();
            $table->foreignId('id_cliente')->constrained('clientes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
}
