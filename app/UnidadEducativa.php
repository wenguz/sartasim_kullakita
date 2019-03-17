<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadEducativa extends Model
{
    protected $table='unidad_educativas';
    protected $primaryKey='id_u_educativa';
     public $timestamps=false;

    protected $fillable = [
         'id_u_educativa','ue_nombre', 'ue_turno','ue_zona','ue_calle','ue_numero','id_victima_fk',
    ];
}
