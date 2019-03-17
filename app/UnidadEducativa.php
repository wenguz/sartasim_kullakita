<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Victima;

class UnidadEducativa extends Model
{
    protected $table='unidad_educativas';
    protected $primaryKey='id_u_educativa';
     public $timestamps=false;

    protected $fillable = [
         'id_u_educativa','ue_nombre', 'ue_turno','ue_zona','ue_calle','ue_numero','id_victima_fk',
    ];
    //para la lalve foranea id_victima_fk que viene de la tabla victimas.Estos son metodos de Eloquent
    public function victimas(){
        return $this->belongsTo('App\Victima');
    }
}
