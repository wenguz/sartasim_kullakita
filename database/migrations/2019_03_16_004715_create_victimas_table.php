<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVictimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('victimas', function (Blueprint $table) {
            $table->bigIncrements('id_victima');
            $table->string('vic_nombre');
            $table->string('vic_apellido');
            $table->integer('vic_edad');
            $table->date('vic_fecha_nacimineto');
            $table->integer('vic_num_hermanos');
            $table->string('vic_procedencia');
            $table->string('vic_nacionalidad');
            $table->string('vic_direccion');
            $table->string('vic_grado_academico');
            $table->string('vic_curso_vencido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('victimas');
    }
}
