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
        Schema::create('linea_compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_producto_id')->references('id')->on('productos')->onDelete('restrict');
            $table->foreignId('fk_compra_id')->references('id')->on('compras')->onDelete('restrict');
            $table->date('fecha_reserva')->nullable();
            $table->time('hora_reserva')->nullable();
            $table->integer('cantidad')->default(1);
            $table->float('precio_parcial')->default(0);
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
        Schema::dropIfExists('linea_compras');
    }
};
