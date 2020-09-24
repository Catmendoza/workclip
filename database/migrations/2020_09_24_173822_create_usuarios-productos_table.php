<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    { Schema::create('usuarios-productos', function (Blueprint $table) {
        $table->id();
        $table->integer('id_perfil');
        $table->string('imagen');
        $table->string('nombre_producto');
        $table->text('descripcion');
        $table->float('precio');
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
        Schema::dropIfExists('usuarios-productos');
    }
}
