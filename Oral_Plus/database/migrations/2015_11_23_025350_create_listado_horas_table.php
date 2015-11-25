<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListadoHorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('listado_horas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->time('hora_inicio');
            $table->time('hora_termino');
            $table->string('duracion');

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
        Schema::drop('listado_horas');
    }
}
