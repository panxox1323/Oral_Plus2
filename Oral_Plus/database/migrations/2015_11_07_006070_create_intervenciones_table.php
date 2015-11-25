<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntervencionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervencions', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_consulta')->unsigned();
            $table->foreign('id_consulta')
                ->references('id')
                ->on('consultas')
                ->onDelete('cascade');
            $table->integer('id_tratamiento')->unsigned();
            $table->foreign('id_tratamiento')
                ->references('id')
                ->on('tratamientos')
                ->onDelete('cascade');
            $table->date('fecha');
            $table->time('hora');
            $table->enum('estado',['disponible', 'reservada', 'cancelada']);


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
        Schema::drop('intervencions');
    }

}
