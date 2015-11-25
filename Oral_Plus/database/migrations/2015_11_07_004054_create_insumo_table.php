<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('precio_unitario');
            $table->date('vencimiento');
            $table->integer('stock');
            $table->string('descripcion')->nullable();
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
        Schema::drop('insumos');
    }
}
