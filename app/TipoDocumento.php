<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Victima;

class TipoDocumento extends Model
{
    protected $table='tipo_documentos';
    protected $primaryKey='id_tipo_doc';
     public $timestamps=false;

    protected $fillable = [
         'id_tipo_doc','doc_nombre', 'doc_estado','doc_expira','doc_numero','id_victima_fk',
    ];

    //para la lalve foranea id_victima_fk que viene de la tabla personas.Estos son metodos de Eloquent
    public function victimas(){
        return $this->belongsTo('App\Victima');
    }
}
