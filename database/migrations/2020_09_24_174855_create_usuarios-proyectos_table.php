<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    { Schema::create('usuarios-proyectos', function (Blueprint $table) {
        $table->id();
        $table->integer('id_perfil');
        $table->string('imagen');
        $table->string('nombre_proyecto');
        $table->text('descripcion');
        $table->string('estado_proyecto');
        $table->integer('finalidad_proyecto');
        $table->date('fecha_publi');


        $table->timestamps();
    });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios-proyectos');
    }
}
