<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('nombre_id')->unsigned();
            $table->foreign('nombre_id')->references('id')->on('personas');
            $table->Integer('motivo_id')->unsigned();
            $table->foreign('motivo_id')->references('id')->on('motivos');
            $table->Integer('junto_id')->unsigned();
            $table->foreign('junto_id')->references('id')->on('personas');
            $table->Integer('autorizado_id')->unsigned();
            $table->foreign('autorizado_id')->references('id')->on('personas');
            $table->tinyInteger('time');
            $table->String('boton');
            $table->datetime('ingreso');
            $table->datetime('salida')->nullable();
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
        Schema::dropIfExists('ingresos');
    }
}
