<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Caso;
use App\Parametrica;

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
    ///para la lalve foranea id_caso_fk que viene de la tabla casos.Estos son metodos de Eloquent
    public function casos(){
        return $this->belongsTo('App\Caso');
    }
    ///para la lalve foranea id_parametrica_fk que viene de la tabla parametricas.Estos son metodos de Eloquent
    public function parametricas(){
        return $this->belongsTo('App\Parametrica');
    }
}
