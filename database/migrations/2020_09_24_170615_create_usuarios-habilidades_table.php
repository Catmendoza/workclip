<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosHabilidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    { Schema::create('usuarios-habilidades', function (Blueprint $table) {
        $table->id();
        $table->integer('id_perfil');
        $table->text('texto_principal');
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
        Schema::dropIfExists('usuarios-habilidades');
    }
}
