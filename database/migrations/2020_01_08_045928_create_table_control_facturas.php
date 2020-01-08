<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableControlFacturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_facturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha_exp');
            $table->date('fecha_ven');
            $table->date('fecha_recibo');
            $table->integer('iva');
            $table->String('estado');
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
        Schema::dropIfExists('control_facturas');
    }
}
