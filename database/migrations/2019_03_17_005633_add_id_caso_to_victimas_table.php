<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdCasoToVictimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('victimas', function (Blueprint $table) {
            $table->unsignedInteger('id_caso_fk');
            $table->foreign('id_caso_fk')->references('id_caso')->on('casos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('victimas', function (Blueprint $table) {
            $table->dropForeign(['id_caso_fk']);
            $table->dropColumn(['id_caso_fk']);
        });
    }
}
