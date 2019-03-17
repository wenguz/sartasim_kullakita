<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Caso;

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
}
