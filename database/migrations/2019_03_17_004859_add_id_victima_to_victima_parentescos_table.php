<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdVictimaToVictimaParentescosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('victima_parentescos', function (Blueprint $table) {
            $table->unsignedInteger('id_victima_fk');
            $table->foreign('id_victima_fk')->references('id_victima')->on('victimas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('victima_parentescos', function (Blueprint $table) {
            $table->dropForeign(['id_victima_fk']);
            $table->dropColumn(['id_victima_fk']);
        });
    }
}
