<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Victima;

class LugarNacimiento extends Model
{
    protected $table='lugar_nacimientos';
    protected $primaryKey='id_lugarna';
     public $timestamps=false;

    protected $fillable = [
         'id_lugarna','pais', 'departamento','provincia',
    ];
    ///para la llave que va a victimas.Estos son metodos de Eloquent
    public function victimas (){
        return $this->hasMany('App\Victima');
    }
}
