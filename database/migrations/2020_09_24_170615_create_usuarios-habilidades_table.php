<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioHabilidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    { Schema::create('usuarios-habilidades', function (Blueprint $table) {
        $table->id('id_habilidades');
        $table->foreignld('id_perfil');
        $table->text('texto_principal');
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
        Schema::dropIfExists('usuarios-habilidades');
    }
}
