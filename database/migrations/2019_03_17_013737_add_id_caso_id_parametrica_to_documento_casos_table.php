<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdCasoIdParametricaToDocumentoCasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documento_casos', function (Blueprint $table) {
            $table->unsignedInteger('id_caso_fk');
            $table->foreign('id_caso_fk')->references('id_caso')->on('casos');
            $table->unsignedInteger('id_parametrica_fk');
            $table->foreign('id_parametrica_fk')->references('id_parametrica')->on('paramertricas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documento_casos', function (Blueprint $table) {
            $table->dropForeign(['id_caso_fk']);
            $table->dropColumn(['id_caso_fk']);
            $table->dropForeign(['id_parametrica_fk']);
            $table->dropColumn(['id_parametrica_fk']);
        });
    }
}
