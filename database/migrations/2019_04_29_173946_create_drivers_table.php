<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('cedula', '10')->nullable()->default(null);
            $table->string('pasaporte', '30')->nullable()->default(null);
            $table->string('genero');
            $table->boolean('estado')->nullable()->default(false);
            $table->string('google_location');
            $table->string('direccion1');
            $table->string('direccion2');
            $table->date('nacimiento');
            $table->string('telefono','9')->nullable()->default(null);
            $table->string('celular','10');
            $table->bigInteger('num_deposito')->nullable()->default(null);
            $table->boolean('p_privacidad')->nullable()->default(false);
            $table->boolean('a_confidencialidad')->nullable()->default(false);
            $table->timestamp('creado');
            $table->timestamp('actualizado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
