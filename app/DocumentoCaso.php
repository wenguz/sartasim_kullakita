<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Caso;

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
    ///para la lalve foranea id_persona_fk que viene de la tabla personas.Estos son metodos de Eloquent
    public function casos(){
        return $this->belongsTo('App\Caso');
    }
}
