<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table='tipo_documentos';
    protected $primaryKey='id_tipo_doc';
     public $timestamps=false;

    protected $fillable = [
         'id_tipo_doc','doc_nombre', 'doc_estado','doc_expira','doc_numero',
    ];
}
