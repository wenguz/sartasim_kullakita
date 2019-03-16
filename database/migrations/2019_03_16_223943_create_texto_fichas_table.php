<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextoFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texto_fichas', function (Blueprint $table) {
            $table->increments('id_texto');
            $table->string('texto_ficha');
            $table->string('texto_area');
            $table->string('texto_seccion');
            $table->string('texto_descripsion');
            $table->date('texto_fecha');
            $table->string('texto_observacion');
            //$table->integer('id_caso_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('texto_fichas');
    }
}
