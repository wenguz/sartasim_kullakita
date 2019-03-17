<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VictimaParentesco extends Model
{
    protected $table='victima_parentescos';
    protected $primaryKey='id_victima_parentesco';
     public $timestamps=false;

    protected $fillable = [
         'id_victima_parentesco','parentesco_nombre', 'parentesco_apellido','parentesco_telefono','parentesco_celular','parentesco_domicilio','parentesco_estado_civil','parentesco_nivel_instruccion','parentesco_ocupacion','parentesco_descripcion','parentesco_observacion','id_victima_fk',
    ];
}
