<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCocheTable extends Migration
{
    public function up()
    {
        Schema::create('coche', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->string('color');
            $table->string('combustible');
            $table->float('cilindrada');
            $table->float('potencia');
            $table->integer('nPuertas');
            $table->foreignId('fk_producto_id')->references('id')->on('producto')->onDelete('restrict');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coche');
    }
}
