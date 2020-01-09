<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarClavesForaneasAControlFacturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('control_facturas', function (Blueprint $table) {
          $table->unsignedInteger('cliente_id');
          $table->unsignedInteger('vendedor_id');
          $table->float('valor_unitario')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('control_facturas', function (Blueprint $table) {
            //
        });
    }
}
