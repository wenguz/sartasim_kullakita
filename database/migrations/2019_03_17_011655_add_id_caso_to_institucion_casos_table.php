<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdCasoToInstitucionCasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('institucion_casos', function (Blueprint $table) {
            $table->unsignedInteger('id_caso_fk');
            $table->foreign('id_caso_fk')->references('id_caso')->on('casos');
            $table->unsignedInteger('id_institucion_fk');
            $table->foreign('id_institucion_fk')->references('id_institucion')->on('instituciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('institucion_casos', function (Blueprint $table) {
            $table->dropForeign(['id_caso_fk']);
            $table->dropColumn(['id_caso_fk']);
            $table->dropForeign(['id_institucion_fk']);
            $table->dropColumn(['id_institucion_fk']);
        });
    }
}
