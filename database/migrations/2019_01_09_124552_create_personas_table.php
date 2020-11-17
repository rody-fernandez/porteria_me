<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
                $table->increments('id');
                $table->String('nro_documento');
                $table->String('nacionalidad');
                $table->String('nombre');
                $table->Integer('empresa_id')->unsigned();
                $table->foreign('empresa_id')->references('id')->on('empresas');
                $table->Integer('cargo_id')->unsigned();
                $table->foreign('cargo_id')->references('id')->on('cargos');
                $table->String('telefono');
                $table->String('foto');
                $table->Integer('legajo');
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
        Schema::dropIfExists('personas');
    }
}
