<?php

use Illuminate\Database\Seeder;
///para crear usar php artisan make:seeder nombreTablaSeeder

//para ejecutar php artisan db:seed
use Illuminate\Support\Facades\DB;
class ParametricasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parametricas')
        	->insert(array(
        		array(
        			'dominio'=>1,
        			'nombre'=>'documentos',
        			'id_padre'=>null,
        			'estado'=>null,
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'orden judicial',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'requerimiento fiscal',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'ficha internacion',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'informe social',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'informe psicologico',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'informe medico ingreso',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'informe pedagogico',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'otros documentos',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        	));
    }
}
