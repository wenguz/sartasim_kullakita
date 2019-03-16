<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentoCasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_casos', function (Blueprint $table) {
            $table->increments('id_doc_caso');
            $table->string('docc_num');
            $table->date('docc_fecha');
            $table->string('docc_estado');
            $table->string('docc_observacion');
            //$table->('id_caso_fk');
            //$table->('id_parametrica_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documento_casos');
    }
}
