<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    protected $table='casos';
    protected $primaryKey='id_caso';
     public $timestamps=false;

    protected $fillable = [
         'id_caso','fecha_ingreso', 'fecha_egreso',
    ];
}
