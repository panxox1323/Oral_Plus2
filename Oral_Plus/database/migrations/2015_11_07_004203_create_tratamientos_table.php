<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTratamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamientos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre_tratamiento');
            $table->date('fecha_inicio');
            $table->integer('valor_tratamiento');
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
        Schema::drop('tratamientos');
    }
}
