<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVictimaParentescosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('victima_parentescos', function (Blueprint $table) {
            $table->increments('id_victima_parentesco');
            $table->string('parentesco_nombre');
            $table->string('parentesco_apellido');
            $table->string('parentesco_telefono');
            $table->string('parentesco_celular');
            $table->string('parentesco_domicilio');
            $table->string('parentesco_estado_civil');
            $table->string('parentesco_nivel_instruccion');
            $table->string('parentesco_ocupacion');
            $table->string('parentesco_descripcion');
            $table->string('parentesco_observacion');
            //$table->integer('id_victima_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('victima_parentescos');
    }
}
