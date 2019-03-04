<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilegios extends Model
{
    protected $table='privilegios';
    protected $primaryKey='id_privilegios';
    public $timestamps=false;
}
