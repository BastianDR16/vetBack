<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeterinariosTable extends Migration
{
    public function up()
    {
        Schema::create('veterinarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo_electronico')->unique();
            $table->string('telefono');
            $table->string('password');
            $table->rememberToken();
            // Otros campos según sea necesario
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('veterinarios');
    }
}
