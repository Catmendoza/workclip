<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosPerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    { Schema::create('usuarios-peril', function (Blueprint $table) {
        $table->id('id_perfil');
        $table->foreignld('id_usuario');
        $table->string('imagen');
        $table->text('texto_quiensoy');
        $table->timestamp();
    });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios-perfil');
    }
}
