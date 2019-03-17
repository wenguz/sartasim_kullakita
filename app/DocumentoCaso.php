<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoCaso extends Model
{
    protected $table='documento_casos';
    protected $primaryKey='id_doc_caso';
     public $timestamps=false;

    protected $fillable = [
         'id_doc_caso','docc_num','docc_fecha','docc_estado','docc_observacion',
         	'id_caso_fk',
         	'id_parametrica_fk',
    ];
}
