<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetalleFactProd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_factura_producto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('producto_id');
            $table->unsignedInteger('factura_id');
            $table->integer('cantidad');
            $table->text('descripcion')->nullable();
            $table->float('valor');
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
        Schema::dropIfExists('detalle_factura_producto');
    }
}
