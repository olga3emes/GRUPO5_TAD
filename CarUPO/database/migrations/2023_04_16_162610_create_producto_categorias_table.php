<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_categorias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_producto_id')->references('id')->on('productos')->onDelete('restrict');
            $table->foreignId('fk_categoria_id')->references('id')->on('categorias')->onDelete('restrict');
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
        Schema::dropIfExists('producto_categorias');
    }
};
