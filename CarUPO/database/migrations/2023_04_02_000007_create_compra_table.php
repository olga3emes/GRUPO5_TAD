<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraTable extends Migration
{
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_user')->references('id')->on('users')->onDelete('restrict');
            $table->float('precio_total')->default(0);
            $table->date('fecha');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('compra');
    }
}
