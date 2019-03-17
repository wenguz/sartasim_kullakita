<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdInsCasoToResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('responsables', function (Blueprint $table) {
            $table->unsignedInteger('id_ins_caso_fk');
            $table->foreign('id_ins_caso_fk')->references('id_ins_caso')->on('institucion_casos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('responsables', function (Blueprint $table) {
            $table->dropForeign(['id_ins_caso_fk']);
            $table->dropColumn(['id_ins_caso_fk']);
        });
    }
}
