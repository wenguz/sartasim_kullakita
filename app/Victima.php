<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Caso;
use App\LugarNacimiento;
use App\Pertenencia;
use App\TipoDocumento;
use App\UnidadEducativa;
use App\VictimaParentesco;

class Victima extends Model
{
    protected $table='victimas';
    protected $primaryKey='id_victima';
     public $timestamps=false;

    protected $fillable = [
         'id_victima','vic_nombre', 'vic_apellido','vic_edad','vic_fecha_nacimiento','vic_num_hermanos','vic_procedencia','vic_nacionalidad','vic_direccion','vic_grado_academico','vic_curso_vencido','id_caso_fk','id_lugarna_fk',
    ];
    ///para la lalve foranea id_persona_fk que viene de la tabla personas.Estos son metodos de Eloquent
    public function casos(){
        return $this->belongsTo('App\Caso');
    }

    ///para la lalve foranea id_lugarna_fk que viene de la tabla personas.Estos son metodos de Eloquent
    public function lugar_nacimientos(){
        return $this->belongsTo('App\LugarNacimiento');
    }
    ///para la llave que va a pertenencias.Estos son metodos de Eloquent
    public function pertenencias (){
        return $this->hasMany('App\Pertenencia');
    }
    ///para la llave que va a tipo_documentos.Estos son metodos de Eloquent
    public function tipo_documentos (){
        return $this->hasMany('App\TipoDocumento');
    }
    //para la llave que va a unidad_educativas.Estos son metodos de Eloquent
    public function unidad_educativas (){
        return $this->hasMany('App\UnidadEducativa');
    }
    //para la llave que va a victima_parentescos.Estos son metodos de Eloquent
    public function victima_parentescos (){
        return $this->hasMany('App\VictimaParentesco');
    }

}
