<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarNacimiento extends Model
{
    protected $table='lugar_nacimientos';
    protected $primaryKey='id_lugarna';
     public $timestamps=false;

    protected $fillable = [
         'id_lugarna','pais', 'departamento','provincia',
    ];
}
