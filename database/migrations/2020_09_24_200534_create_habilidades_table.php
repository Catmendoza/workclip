<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidades', function (Blueprint $table) {
            $table->id();
            $table->integer('id_perfil')->nullable();
            $table->string('titulo1')->nullable();
            $table->text('principal_texto1')->nullable();
            $table->string('titulo2')->nullable();
            $table->text('principal_texto2')->nullable();
            $table->string('titulo3')->nullable();
            $table->text('principal_texto3')->nullable();
            $table->string('aptitud1')->nullable();
            $table->string('aptitud2')->nullable();
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
        Schema::dropIfExists('habilidades');
    }
}
