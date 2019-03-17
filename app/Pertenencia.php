<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Victima;

class Pertenencia extends Model
{
     protected $table='pertenencias';
    protected $primaryKey='id_pertenencia';
     public $timestamps=false;

    protected $fillable = [
         'id_pertenencia','descripsion', 'estado','id_victima_fk',
    ];
    ///para la lalve foranea id_victima_fk que viene de la tabla victimas.Estos son metodos de Eloquent
    public function victimas(){
        return $this->belongsTo('App\Victima');
    }
}
