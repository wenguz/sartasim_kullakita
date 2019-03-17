<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $table='responsables';
    protected $primaryKey='id_responsable';
     public $timestamps=false;

    protected $fillable = [
         'id_responsable','cargo','id_persona_fk','id_ins_caso_fk',
    ];
}
