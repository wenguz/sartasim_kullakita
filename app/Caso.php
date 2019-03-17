<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DocumentoCaso;
use App\TextoFicha;
use App\Victima;
use App\InstitucionCaso;

class Caso extends Model
{
    protected $table='casos';
    protected $primaryKey='id_caso';
     public $timestamps=false;

    protected $fillable = [
         'id_caso','fecha_ingreso', 'fecha_egreso',
    ];

    ///para la llave que va a documento_casos.Estos son metodos de Eloquent
    public function documento_casos (){
        return $this->hasMany('App\DocumentoCaso');
    }
    ///para la llave que va a texto_fichas.Estos son metodos de Eloquent
    public function texto_fichas (){
        return $this->hasMany('App\TextoFicha');
    }
        ///para la llave que va a victimas.Estos son metodos de Eloquent
    public function victimas (){
        return $this->hasMany('App\Victima');
    }
       ///para la llave que va a institucion_casos.Estos son metodos de Eloquent
    public function institucion_casos (){
        return $this->hasMany('App\InstitucionCaso');
    }
}
