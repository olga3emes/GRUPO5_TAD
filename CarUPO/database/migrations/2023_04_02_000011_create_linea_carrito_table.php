<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaCarritoTable extends Migration
{
    public function up()
    {
        Schema::create('linea_carrito', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_producto_id')->references('id')->on('producto')->onDelete('restrict');
            $table->foreignId('fk_carrito_id')->references('id')->on('carrito_compra')->onDelete('restrict');
            $table->integer('cantidad')->default(1);
            $table->float('precio_parcial')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('linea_carrito');
    }
}
