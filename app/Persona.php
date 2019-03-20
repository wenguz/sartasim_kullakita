<?php
//para crear Modelo,migracion y controlador juntos: php artisan make:model Persona -mc
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Responsable;



class Persona extends Model
{


    protected $table='personas';
    protected $primaryKey='id_persona';
     public $timestamps=false;
    protected $fillable = [
         'id_persona','persona_nombre', 'persona_apellido','persona_ci','persona_telefono','persona_celular',
    ];

    ///para la llave que va a users.Estos son metodos de Eloquent
    public function users (){
        return $this->hasMany('App\User');
    }
     ///para la llave que va a responsabless.Estos son metodos de Eloquent
    public function responsables (){
        return $this->hasMany('App\Responsable');
    }
}
