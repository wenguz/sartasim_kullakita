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
            $table->increments('id_victima');
            $table->string('vic_nombre');
            $table->string('vic_apellido')->nullable();
            $table->integer('vic_edad')->nullable();
            $table->date('vic_fecha_nacimiento')->nullable();
            $table->integer('vic_num_hermanos')->default('0');
            $table->string('vic_procedencia');
            $table->string('vic_nacionalidad')->nullable();
            $table->string('vic_direccion')->nullable();
            $table->string('vic_grado_academico')->nullable();
            $table->string('vic_curso_vencido')->nullable();
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
