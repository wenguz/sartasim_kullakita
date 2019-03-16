<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paramertrica extends Model
{
    protected $table='parametricas';
    protected $primaryKey='id_parametrica';
     public $timestamps=false;

    protected $fillable = [
         'id_parametrica','dominio', 'nombre','estado',
    ];
}
