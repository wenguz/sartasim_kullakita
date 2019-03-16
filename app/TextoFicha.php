<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextoFicha extends Model
{
    protected $table='texto_fichas';
    protected $primaryKey='id_texto';
     public $timestamps=false;

    protected $fillable = [
         'id_texto','texto_ficha','texto_area','texto_seccion','texto_descripsion','texto_fecha','texto_observacion',
    ];
}
