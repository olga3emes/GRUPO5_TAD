<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritoCompraTable extends Migration
{
    public function up()
    {
        Schema::create('carrito_compra', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_user')->references('id')->on('users')->onDelete('restrict');
            $table->float('precio_total')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carrito_compra');
    }
}
