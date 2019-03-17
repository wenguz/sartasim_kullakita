<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\InstitucioCaso;

class Institucion extends Model
{
    protected $table='instituciones';
    protected $primaryKey='id_institucion';
    public $timestamps=false;
    protected $fillable = [
         'id_institucion','ins_nombre', 'ins_municipio_r','ins_municipio_u','ins_telefono','ins_celular',
    ];

    ///para la llave que va a institucion_casos.Estos son metodos de Eloquent
    public function institucion_casos (){
        return $this->hasMany('App\InstitucioCaso');
    }
}
