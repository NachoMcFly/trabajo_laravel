<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockPrecioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_precio', function (Blueprint $table) {
            $table->id();
            $table->integer('stock');
            $table->text('descripcion',20);
            $table->integer('Codigo');
            $table->integer('precio');
            $table->foreignId('producto_id')->references('id')->on('producto');
            $table->foreignId('sucursal_id')->references('id')->on('sucursal');
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
        Schema::dropIfExists('stock_precio');
    }
}
