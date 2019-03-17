<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstitucionCaso extends Model
{
    protected $table='institucion_casos';
    protected $primaryKey='id_ins_caso';
    public $timestamps=false;
    protected $fillable = [
         'id_ins_caso','accion', 'observacion','id_caso_fk','id_institucion_fk',
    ];
}
