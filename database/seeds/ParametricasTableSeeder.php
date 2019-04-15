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
        			'nombre'=>'Orden_Judicial',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'Requerimiento_Fiscal',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'Ficha_Internacion',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'Informe_Social',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'Informe_Psicologico',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'Informe_Medico',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'Informe_Pedagogico',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
        		array(
        			'dominio'=>1,
        			'nombre'=>'Otros_Documentos',
        			'id_padre'=>1,
        			'estado'=>'ingreso',
        		),
                array(
                    'dominio'=>1,
                    'nombre'=>'Coordinacion',
                    'id_padre'=>1,
                    'estado'=>'ingreso',
                ),
        	));
    }
}
