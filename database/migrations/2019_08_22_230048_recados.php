<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('recados', function (Blueprint $table) {
            $table->bigIncrements('id_recado');
            $table->char('titulo', 100);
            $table->string('conteudo_recado')
            $table->unsignedBigInteger('id_usuario');
            $table->foreing('id_usuario')->references('id_usuario')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
