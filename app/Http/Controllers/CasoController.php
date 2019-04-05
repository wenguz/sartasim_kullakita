<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caso;
use App\Victima;
use App\LugarNacimiento;
use App\TipoDocumento;
use App\VictimaParentesco;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

//Esta librería nos permitirá hacer redireccionamiento de nuestras acciones.
use Illuminate\Support\Facades\Redirect;

class CasoController extends Controller
{
    public function index(Request $request){
//La funcion casov se creo en el modelo vicitma par poder buscar casos por nombre de la vcitima o por numero de caso.

    	$casos=Victima::casov($request->get('caso_victima'))
    ->join('casos','victimas.id_caso_fk','=','casos.id_caso')
    ->join('tipo_documentos','victimas.id_victima','=','tipo_documentos.id_victima_fk')
    ->where('tipo_documentos.doc_nombre','=','CI')
    ->orderBy('id_caso_fk','ASC')
    ->paginate(2);
    return view('casos.index',compact('casos'));
    }

    public function create()
    {
       $caso=new Caso;
        $casos=Caso::get()->last();
        if ($casos === null) {
            $caso->id_caso=1;
        }
        else{
            $caso->id_caso=$casos->id_caso+1;
        }
        $caso->fecha_ingreso=Carbon::now()->toDateTimeString();
        return View('casos.save',compact('caso'));
    }

    public function store(Request $request)
    {

       if (isset($_POST['submit'])) {
        if ($request['vic_fecha_nacimiento'] != null) {
                $nacimiento=Carbon::createFromFormat( 'Y-m-d',$request['vic_fecha_nacimiento']);
            }
            else{
                $nacimiento=null;
            }
             if ($request['ci_expira']!=null) {
                $expira=Carbon::createFromFormat( 'Y-m-d',$request['ci_expira']);
            }
            else{
                $expira=null;
            }


        //Crear caso nueva.
        $caso = Caso::create([
            'fecha_ingreso'=> Carbon::now()->toDateTimeString(),
            'fecha_egreso'=> null,
        ]);
        $caso->save();

        $lugar=LugarNacimiento::create([
            'pais'=>$request['vic_pais'],
            'departamento'=>$request['vic_departamento'],
            'provincia'=>$request['vic_provincia'],
        ]);
          $lugar->save();

        $vic=Victima::create([
            'vic_nombre'=>$request['vic_nombre'],
            'vic_apellido'=>$request['vic_apellido'],
            'vic_edad'=>$request['vic_edad'],
            'vic_fecha_nacimiento'=>$nacimiento,
            'vic_num_hermanos'=>$request['vic_num_hermanos'],
            'vic_procedencia'=>$request['vic_procedencia'],
            'vic_nacionalidad'=>$request['vic_nacionalidad'],
            'vic_direccion'=>$request['vic_direccion'],
            'id_caso_fk'=>$caso->id_caso,
            'id_lugarna_fk'=>$lugar->id_lugarna,

        ]);
         $vic->save();
         $id_v=$vic->id_victima;

        if ($request['vic_estado_dni'] == 'Tiene') {
            $tdni=TipoDocumento::create([
            'doc_nombre'=>'DNI',
            'doc_estado'=>$request['vic_estado_dni'],
            'doc_expira'=>null,
            'doc_numero'=>$request['vic_num_dni'],
            'id_victima_fk'=>$vic->id_victima,
            ]);

        }
        else{
             $tdni=TipoDocumento::create([
            'doc_nombre'=>'DNI',
            'doc_estado'=>$request['vic_estado_dni'],
            'doc_expira'=>null,
            'doc_numero'=>null,
            'id_victima_fk'=>$vic->id_victima,
            ]);

        }
         $tdni->save();
        if ($request['vic_estado_ci'] == 'Tiene') {
            $tdci=TipoDocumento::create([
            'doc_nombre'=>'CI',
            'doc_estado'=>$request['vic_estado_ci'],
           'doc_expira'=>$expira,
            'doc_numero'=>$request['vic_num_ci'],
            'id_victima_fk'=>$vic->id_victima,
            ]);

        }
        else{
            $tdci=TipoDocumento::create([
            'doc_nombre'=>'CI',
            'doc_estado'=>$request['vic_estado_ci'],
           'doc_expira'=>$expira,
            'doc_numero'=>null,
            'id_victima_fk'=>$vic->id_victima,
            ]);

        }
        $tdci->save();
        if ($request['vic_estado_cn'] == 'Tiene') {
            $tdcn=TipoDocumento::create([
            'doc_nombre'=>'Certificado Nacimiento',
            'doc_estado'=>$request['vic_estado_cn'],
            'doc_expira'=>null,
            'doc_numero'=>null,
            'id_victima_fk'=>$vic->id_victima,
            ]);

        }
        else{
            $tdcn=TipoDocumento::create([
            'doc_nombre'=>'Certificado Nacimiento',
            'doc_estado'=>$request['vic_estado_cn'],
            'doc_expira'=>null,
            'doc_numero'=>null,
            'id_victima_fk'=>$vic->id_victima,
            ]);

        }
        $tdcn->save();
        if ($request['vic_doc_idn'] != null) {
            $tdco=TipoDocumento::create([
            'doc_nombre'=>$request['vic_doc_idn'],
            'doc_estado'=>'Tiene',
            'doc_expira'=>null,
            'doc_numero'=>null,
            'id_victima_fk'=>$vic->id_victima,
            ]);

        }
        else{
            $tdco=TipoDocumento::create([
            'doc_nombre'=>$request['vic_doc_idn'],
            'doc_estado'=>'No tiene',
            'doc_expira'=>null,
            'doc_numero'=>null,
            'id_victima_fk'=>$vic->id_victima,
            ]);
        }
         $tdco->save();
         //https://programacion.net/articulo/anadir_y_eliminar_campos_inputs_dinamicamente_mediante_jquery_1816?fbclid=IwAR3AJo4g3w-llOsfcAleMYwrD9bxvyMjdnZtGCpAMp4rjwztsYqiDFOII-c
       // https://www.lawebdelprogramador.com/foros/PHP/1368779-ALMACENAR-VARIOS-REGISTROS-EN-ARREGLO.html

         $datos = array();
        $cantidad = count($request['parentesco_nombre']);
        $nombre=$request['parentesco_nombre'];
        $apellido=$request['parentesco_apellido'];
        $telefono=$request['parentesco_telefono'];
        $celular=$request['parentesco_celular'];
        $parientes=$request['pariente'];
        for ($i=0; $i < $cantidad; $i++)
        {
            $datos[$i] = array ("id_victima"=>$id_v,"parentesco_nombre"=>$nombre[$i],"parentesco_apellido"=>$apellido[$i],"parentesco_telefono"=>$telefono[$i],"parentesco_celular"=>$celular[$i],"pariente"=>$parientes[$i]);
       }
        foreach($datos as $dato){

             $parentesco=VictimaParentesco::create([
            'parentesco_nombre'=>$dato["parentesco_nombre"],
            'parentesco_apellido'=>$dato["parentesco_apellido"],
            'parentesco_telefono'=>$dato["parentesco_telefono"],
            'parentesco_celular'=>$dato["parentesco_celular"],
            'parentesco_domicilio'=>null,
            'parentesco_estado_civil'=>null,
            'parentesco_nivel_instruccion'=>null,
            'parentesco_ocupacion'=>null,
            'parentesco_descripcion'=>$dato["pariente"],
            'parentesco_observacion'=>$request['parentesco_observacion'],
            'id_victima_fk'=>$dato["id_victima"],
            ]);
             $parentesco->save();

        }

        //Redirigir a la lista de casos
        return Redirect::to('casos')->with('notice', 'Caso guardado correctamente.');
    } else {
        echo "Error in registering...Please try again later!";
        }



    }

    public function show($id)
    {/*
        $casoa = caso::where(array(
            'id_caso' => $id,
        ))->first();
        return View('casos.show')
            ->with('caso', $caso);
            */
    }

    public function edit($id)
    {/*
        $caso= Caso::where(array(
            'id_caso' => $id,
        ))->first();
        $victima= Victima::where(array(
            'id_caso_fk' => $id,
        ))->first();
        $lugarna=LugarNacimiento::where(array(
                'id_lugarna'=>$victima->id_lugarna_fk,
        ))->first();
        $tipodoc=TipoDocumento::where(array(
                'id_victima_fk'=>$victima->id_victima,
        ))->get();
        return View('casos.edit')
            ->with('caso', $caso)
            ->with('victima',$victima)
            ->with('tipodoc',$tipodoc);
            */
    }

    public function update(Request $request, $id)
    {/*
        $caso = Caso::where(array(
            'id_caso' => $id,
        ))->first();
        $caso->fecha_ingreso = $request->f_in;
        $caso->fecha_egreso = $request->f_eg;
        $caso->save();
        return Redirect::to('casos')->with('notice', 'Caso guardado correctamente.');
        */
    }

     public function destroy($id)
    {
        /*
        $caso = Caso::where(array(
            'id_caso' => $id,
        ))->first();
        $caso->delete();
        return Redirect::to('casoss')->with('notice', 'Caso eliminado correctamente.');
        */
    }
}