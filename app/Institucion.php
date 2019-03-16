<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table='instituciones';
    protected $primaryKey='id_institucion';
    public $timestamps=false;
    protected $fillable = [
         'id_institucion','ins_nombre', 'ins_municipio_r','ins_municipio_u','ins_telefono','ins_celular',
    ];
}
