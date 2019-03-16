<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadEducativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_educativas', function (Blueprint $table) {
            $table->increments('id_u_educativa');
            $table->string('ue_nombre');
            $table->string('ue_turno');
            $table->string('ue_zona');
            $table->string('ue_calle');
            $table->string('ue_numero');
            // $table->integer('id_victima_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidad_educativas');
    }
}
