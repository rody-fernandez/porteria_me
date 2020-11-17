<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlmuerzosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almuerzos', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('name_id')->unsigned();
            $table->foreign('name_id')->references('id')->on('personas');
            $table->datetime('exit');
            $table->String('status');
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
        Schema::dropIfExists('almuerzos');
    }
}
