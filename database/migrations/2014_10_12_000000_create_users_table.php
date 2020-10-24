<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');;
            $table->string('email')->unique();
            $table->string('contacto');
            $table->string('programa');
            $table->string('usuario');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('edad');
            $table->integer('rol');
            $table->string('imagen');
            $table->text('texto_quiensoy');
            $table->string('nombre_empresa')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('git')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
