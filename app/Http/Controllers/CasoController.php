<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caso;
use App\Victima;
use App\LugarNacimiento;
use App\TipoDocumento;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

//Esta librería nos permitirá hacer redireccionamiento de nuestras acciones.
use Illuminate\Support\Facades\Redirect;

class CasoController extends Controller
{
    public function index(){
    	$casos=DB::table('victimas')
    ->join('casos','victimas.id_caso_fk','=','casos.id_caso')
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
            'vic_fecha_nacimiento'=>$request['vic_fecha_nacimiento'],

            //'vic_num_hermanos'=>$request[''],
            'vic_procedencia'=>$request['vic_procedencia'],
            'vic_nacionalidad'=>$request['vic_nacionalidad'],

            'id_caso_fk'=>$caso->id_caso,
            'id_lugarna_fk'=>$lugar->id_lugarna,

        ]);
        $vic->save();
        if ($request['vic_estado_dni'] == 'Tiene') {
            $tdni=TipoDocumento::create([
            'doc_nombre'=>'DNI',
            'doc_estado'=>$request['vic_estado_dni'],
            'doc_expira'=>null,
            'doc_numero'=>$request['vic_num_dni'],
            'id_victima_fk'=>$vic->id_victima,
            ]);
            $tdni->save();
        }elseif ($request['vic_estado_ci'] == 'Tiene') {
            $tdci=TipoDocumento::create([
            'doc_nombre'=>'CI',
            'doc_estado'=>$request['vic_estado_ci'],
            'doc_expira'=>$request['ci_expira'],
            'doc_numero'=>$request['vic_num_ci'],
            'id_victima_fk'=>$vic->id_victima,
            ]);
            $tdci->save();
        }
        if ($request['vic_estado_cn'] == 'Tiene') {
            $tdcn=TipoDocumento::create([
            'doc_nombre'=>'Certificado Nacimiento',
            'doc_estado'=>$request['vic_estado_cn'],
            'doc_expira'=>null,
            'doc_numero'=>null,
            'id_victima_fk'=>$vic->id_victima,
            ]);
            $tdcn->save();
        }

        //Redirigir a la lista de casos
        return Redirect::to('casos')->with('notice', 'Caso guardado correctamente.');
    }

    public function show($id)
    {
        $casoa = caso::where(array(
            'id_caso' => $id,
        ))->first();
        return View('casos.show')
            ->with('caso', $caso);
    }

    public function edit($id)
    {
        $caso= Caso::where(array(
            'id_caso' => $id,
        ))->first();
        return View('casos.save')
            ->with('caso', $caso)
            ->with('method', 'PUT');
    }

    public function update(Request $request, $id)
    {
        $caso = Caso::where(array(
            'id_caso' => $id,
        ))->first();
        $caso->fecha_ingreso = $request->f_in;
        $caso->fecha_egreso = $request->f_eg;
        $caso->save();
        return Redirect::to('casos')->with('notice', 'Caso guardado correctamente.');
    }

     public function destroy($id)
    {
        $caso = Caso::where(array(
            'id_caso' => $id,
        ))->first();
        $caso->delete();
        return Redirect::to('casoss')->with('notice', 'Caso eliminado correctamente.');
    }
}