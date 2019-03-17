<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Caso;

class TextoFicha extends Model
{
    protected $table='texto_fichas';
    protected $primaryKey='id_texto';
     public $timestamps=false;

    protected $fillable = [
         'id_texto','texto_ficha','texto_area','texto_seccion','texto_descripsion','texto_fecha','texto_observacion','id_caso_fk',
    ];
    ///para la lalve foranea id_persona_fk que viene de la tabla personas.Estos son metodos de Eloquent
    public function casos(){
        return $this->belongsTo('App\Caso');
    }
}
