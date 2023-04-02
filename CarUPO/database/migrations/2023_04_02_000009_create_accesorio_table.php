<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccesorioTable extends Migration
{
    public function up()
    {
        Schema::create('accesorio', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('fk_producto_id')->references('id')->on('producto')->onDelete('restrict');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accesorio');
    }
}
