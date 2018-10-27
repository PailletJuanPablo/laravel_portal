<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escorts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->longText('descripcion');
            $table->string('imagen_principal');
            $table->string('numero_telefono')->nullable();
            $table->string('altura')->nullable();;
            $table->string('medidas')->nullable();;
            $table->string('viajes')->nullable();;
            $table->integer('barrio_id')->unsigned();
            $table->foreign('barrio_id')->references('id')->on('barrios');
            $table->integer('categoria')->unsigned();
            $table->foreign('categoria')->references('id')->on('categorias');
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
        Schema::dropIfExists('escorts');
    }
}
