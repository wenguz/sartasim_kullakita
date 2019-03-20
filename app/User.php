<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Persona;
use Illuminate\Database\Eloquent\SoftDeletes;



class User extends Authenticatable
{
    //use HashRoles;
    use Notifiable;
    use SoftDeletes;


    protected $table='users';
    protected $primaryKey='id_usuario';
    // public $timestamps=false;
    public $rememberTokenName=false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'id_usuario','usuario', 'password','email','id_persona_fk',
    ];

    protected $dates=['deleted_at'];

    ///para la lalve foranea id_persona_fk que viene de la tabla personas.Estos son metodos de Eloquent
    public function personas(){
        return $this->belongsTo('App\Persona');
    }

}
