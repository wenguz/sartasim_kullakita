<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertenencia extends Model
{
     protected $table='pertenencias';
    protected $primaryKey='id_pertenencia';
     public $timestamps=false;

    protected $fillable = [
         'id_pertenencia','descripsion', 'estado','id_victima_fk',
    ];
}
