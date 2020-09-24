<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosHobbysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    { Schema::create('usuarios-hobbys', function (Blueprint $table) {
        $table->id('id_hobby');
        $table->foreignld('id_perfil');
        $table->String('cultura');
        $table->String('deporte');
        $table->String('comida');

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
        Schema::dropIfExists('usuarios-hobbys');
    }
}
