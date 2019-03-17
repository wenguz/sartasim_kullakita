<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Caso;
use App\Institucion;
use App\Responsable;

class InstitucionCaso extends Model
{
    protected $table='institucion_casos';
    protected $primaryKey='id_ins_caso';
    public $timestamps=false;
    protected $fillable = [
         'id_ins_caso','accion', 'observacion','id_caso_fk','id_institucion_fk',
    ];
    ///para la lalve foranea id_persona_fk que viene de la tabla personas.Estos son metodos de Eloquent
    public function casos(){
        return $this->belongsTo('App\Caso');
    }
    ///para la lalve foranea id_institucion_fk que viene de la tabla instituciones.Estos son metodos de Eloquent
    public function instituciones(){
        return $this->belongsTo('App\Institucion');
    }
    ///para la llave que va a responsables.Estos son metodos de Eloquent
    public function responsables (){
        return $this->hasMany('App\Responsable');
    }
}
