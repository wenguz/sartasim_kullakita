<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdLugarnaToVictimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('victimas', function (Blueprint $table) {
            $table->unsignedInteger('id_lugarna_fk');
            $table->foreign('id_lugarna_fk')->references('id_lugarna')->on('lugar_nacimientos');
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
            $table->dropForeign(['id_lugarna_fk']);
            $table->dropColumn(['id_lugarna_fk']);
        });
    }
}
