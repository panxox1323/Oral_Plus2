<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horas', function(Blueprint $table)
        {

            $table->integer('id_consulta')->unsigned()->nullable();
            $table->foreign('id_consulta')
                ->references('id')
                ->on('consultas')
                ->onDelete('cascade');

            $table->integer('id_intervencion')->unsigned()->nullable();
            $table->foreign('id_intervencion')
                ->references('id')
                ->on('intervencions')
                ->onDelete('cascade');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->date('fecha');
            $table->time('hora');
            $table->primary(array('fecha', 'hora'));
            $table->enum('estado', ['ocupada', 'disponible']);


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
        Schema::drop('horas');
    }
}
