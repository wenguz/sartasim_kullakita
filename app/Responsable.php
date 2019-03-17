<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\InstitucionCaso;
use App\Persona;

class Responsable extends Model
{
    protected $table='responsables';
    protected $primaryKey='id_responsable';
     public $timestamps=false;

    protected $fillable = [
         'id_responsable','cargo','id_persona_fk','id_ins_caso_fk',
    ];
    ///para la lalve foranea id_ins_caso_fk que viene de la tabla institucion_casos.Estos son metodos de Eloquent
    public function institucion_casos(){
        return $this->belongsTo('App\InstitucionCaso');
    }
    ///para la lalve foranea id_persona_fk que viene de la tabla personas.Estos son metodos de Eloquent
    public function personas(){
        return $this->belongsTo('App\Persona');
    }
}
