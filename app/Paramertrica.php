<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DocumentoCaso;

class Paramertrica extends Model
{
    protected $table='parametricas';
    protected $primaryKey='id_parametrica';
     public $timestamps=false;

    protected $fillable = [
         'id_parametrica','dominio', 'nombre','id_padre','estado',
    ];
    ///para la llave que va a documento_casos.Estos son metodos de Eloquent
    public function documento_casos (){
        return $this->hasMany('App\DocumentoCaso');
    }
}
