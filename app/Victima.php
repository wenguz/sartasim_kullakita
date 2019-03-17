<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Caso;

class Victima extends Model
{
    protected $table='victimas';
    protected $primaryKey='id_victima';
     public $timestamps=false;

    protected $fillable = [
         'id_victima','vic_nombre', 'vic_apellido','vic_edad','vic_fecha_nacimineto','vic_num_hermanos','vic_procedencia','vic_nacionalidad','vic_direccion','vic_grado_academico','vic_curso_vencido','id_caso_fk','id_lugarna_fk',
    ];
    ///para la lalve foranea id_persona_fk que viene de la tabla personas.Estos son metodos de Eloquent
    public function casos(){
        return $this->belongsTo('App\Caso');
    }
}
