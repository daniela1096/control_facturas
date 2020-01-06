<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumsInTableClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('control_clientes', function (Blueprint $table) {
            $table->String('nombre_completo');
            $table->String('nit');
            $table->String('telefono');
            $table->String('ciudad');
            $table->String('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('control_clientes', function (Blueprint $table) {
          $table->dropColumn('nombre_completo');
          $table->dropColumn('nit');
          $table->dropColumn('telefono');
          $table->dropColumn('ciudad');
          $table->dropColumn('email');
        });
    }
}
