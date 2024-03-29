<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');
            $table->string('email');
            //$table->string('email')->unique();
            $table->string('senha');
            $table->integer('idSetor')->unsigned();

            $table->foreign('idSetor')->references('id')->on('setors');
            //$table->unique('email');

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
        Schema::dropIfExists('usuarios');
    }
}
