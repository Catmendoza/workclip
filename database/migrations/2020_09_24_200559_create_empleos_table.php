<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_perfil');
            $table->string('titulo_trabajo');
            $table->integer('tiempo_trabajo');
            $table->integer('tipo_empleo');
            $table->integer('tipo_contrato');
            $table->float('saliarioi');
            $table->float('salariof');
            $table->integer('recibirhv');
            $table->string('descripcion_empleo');
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
        Schema::dropIfExists('empleos');
    }
}
