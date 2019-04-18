<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caso;
use App\Victima;
use App\LugarNacimiento;
use App\TipoDocumento;
use App\VictimaParentesco;
use App\Institucion;
use App\InstitucionCaso;
use App\Persona;
use App\Responsable;
use App\Paramertrica;
use App\DocumentoCaso;
use App\TextoFicha;
use App\Pertenencia;

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
    //defensoria q interna
        $def_int=Institucion::create([
            'ins_nombre'=>$request['defensoria_interna_0'].' '.$request['defensoria_interna_1'],
            'ins_municipio_u'=>$request['defensoria_interna_2'],
            'ins_municipio_r'=>$request['defensoria_interna_3'],
        ]);
        $def_int->save();
        $id_def_int=$def_int->id_institucion;
        $ins_caso1=InstitucionCaso::create([
            'accion'=>'Interna',
            'obseracion'=>null,
            'id_caso_fk'=>$caso->id_caso,
            'id_institucion_fk'=>$id_def_int,
        ]);
        $ins_caso1->save();
    //institucion responsable
        $ins_resp=Institucion::create([
            'ins_nombre'=>$request['ins_responsable_0'].' '.$request['ins_responsable_1'],
            'ins_telefono'=>$request['ins_responsable_2'],
            'ins_celular'=>$request['ins_responsable_3'],
        ]);
        $ins_resp->save();
        $id_ins_resp=$ins_resp->id_institucion;
        $ins_caso2=InstitucionCaso::create([
            'accion'=>'Responsable',
            'id_caso_fk'=>$caso->id_caso,
            'id_institucion_fk'=>$id_ins_resp,
        ]);
        $ins_caso2->save();
    //persona responsable
        $responsable=Persona::create([
            'persona_nombre'=>$request['persona_responsable_0'],
            'persona_apellido'=>$request['persona_responsable_1'],
        ]);
        $responsable->save();
        $responsable1=Responsable::create([
            'cargo'=>'Responsable',
            'id_persona_fk'=>$responsable->id_persona,
            'id_ins_caso_fk'=>$ins_caso2->id_ins_caso,
        ]);
        $responsable1->save();

    //Modalidad de ingreso 1
        if($request['docc_oj_1']=='Tiene'){
         $id_oj=DB::table('parametricas')->where('nombre', $request['docc_oj_0'])->first();

         $docc_1=DocumentoCaso::create([
            'docc_estado'=>$request['docc_oj_1'],
            'docc_fecha'=>Carbon::now()->toDateTimeString(),
            'docc_num'=>$request['docc_oj_2'],
            'id_caso_fk'=>$caso->id_caso,
            'id_parametrica_fk'=>$id_oj->id_parametrica,
            'docc_observacion'=>$request['docc_oj_0'],
        ]);
         $docc_1->save();
         $ins_juzgado=Institucion::create([
            'ins_nombre'=>$request['ins_juzgado_0'].' '.$request['ins_juzgado_1'],
        ]);
         $ins_juzgado->save();
         $ins_caso3=InstitucionCaso::create([
            'accion'=>'Ingreso',
            'id_caso_fk'=>$caso->id_caso,
            'id_institucion_fk'=>$ins_juzgado->id_institucion,
        ]);
         $ins_caso3->save();
        }
                    //modalidaad ingreso 2
        if($request['docc_rf_1']=='Tiene'){
            $id_re=DB::table('parametricas')->where('nombre', $request['docc_rf_0'])->first();
            $docc_2=DocumentoCaso::create([
                'docc_estado'=>$request['docc_rf_1'],
                'docc_fecha'=>Carbon::now()->toDateTimeString(),
                'id_caso_fk'=>$caso->id_caso,
                'id_parametrica_fk'=>$id_re->id_parametrica,
                'docc_observacion'=>$request['docc_rf_0'],
            ]);
            $docc_2->save();
            $id_co=DB::table('parametricas')->where('nombre', $request['docc_coordinacion_0'])->first();

            $docc_3=DocumentoCaso::create([
                'docc_estado'=>$request['docc_coordinacion_1'],
                'docc_fecha'=>Carbon::now()->toDateTimeString(),
                'id_caso_fk'=>$caso->id_caso,
                'id_parametrica_fk'=>$id_co->id_parametrica,
                'docc_observacion'=>$request['docc_coordinacion_0'],
            ]);
            $docc_3->save();
            $def_atiende=Institucion::create([
                'ins_nombre'=>$request['defensoria_atiende_0'].' '.$request['defensoria_atiende_1'],
                'ins_municipio_r'=>$request['defensoria_atiende_3'],
                'ins_municipio_u'=>$request['defensoria_atiende_2'],
            ]);
            $def_atiende->save();
            $def_atiende1=$def_atiende->id_institucion;
            $ins_caso3=InstitucionCaso::create([
                'accion'=>'Atiende',
                'id_caso_fk'=>$caso->id_caso,
                'id_institucion_fk'=>$def_atiende1,
            ]);
            $ins_caso3->save();
        }
                    //modalidad ingreso 3
        if ($request['transferencia_1']=='Si') {
            $trans=Institucion::create([
                'ins_nombre'=>$request['transferencia_0'].' '.$request['transferencia_2'],
            ]);
            $trans->save();
            $ins_caso4=InstitucionCaso::create([
                'accion'=>'Transfiere',
                'id_caso_fk'=>$caso->id_caso,
                'id_institucion_fk'=>$trans->id_institucion,
                'observacion'=>$request['transferencia_3'],
            ]);
            $ins_caso4->save();
        }

    //Documnetos presentados al ingresar
        $arr_doc= array();
        $doc=$request['docc_estado_in'];
        foreach ($doc as $i => $docs) {
            $id_doc=DB::table('parametricas')->where('nombre', $docs)->where('dominio',1)->first();
            if ($id_doc!=null && $docs!='Otros_Documentos') {
                $arr_doc[$i] = array ("id_caso_fk"=>$caso->id_caso,
                 "docc_fecha"=>Carbon::now()->toDateTimeString(),
                 "docc_estado"=>'Tiene',
                 "id_parametrica_fk"=>$id_doc->id_parametrica,
                 "docc_observacion"=>$request['docc_observacion']);
            }
            elseif($docs!=null){
                $id_doc=DB::table('parametricas')->where('nombre', 'Otros_Documentos')->where('dominio',1)->first();
                $arr_doc[$i] = array ("id_caso_fk"=>$caso->id_caso,
                    "docc_fecha"=>Carbon::now()->toDateTimeString(),
                    "docc_estado"=>'Tiene',
                    "id_parametrica_fk"=>$id_doc->id_parametrica,
                    "docc_observacion"=>$docs);
            }
        }
        foreach ($arr_doc as $ar_doc) {
           $doc_caso=DocumentoCaso::create([
            'id_caso_fk'=>$ar_doc["id_caso_fk"],
            'docc_fecha'=>$ar_doc["docc_fecha"],
            'docc_estado'=>$ar_doc["docc_estado"],
            'id_parametrica_fk'=>$ar_doc["id_parametrica_fk"],
            'docc_observacion'=>$ar_doc["docc_observacion"],

        ]);
           $doc_caso->save();
        }


    //Problematicas de ingreso
        $arr_probl= array();
        $problematicas=$request['problematica'];
        foreach ($problematicas as $i => $problematica) {
            $id_doc=DB::table('parametricas')->where('nombre', $problematica)->where('dominio',2)->first();
            if ($id_doc!=null && $problematica!='Violencia_Sexual') {
                $arr_probl[$i] = array ("id_caso_fk"=>$caso->id_caso,
                 "docc_fecha"=>Carbon::now()->toDateTimeString(),
                 "docc_estado"=>'Tiene',
                 "id_parametrica_fk"=>$id_doc->id_parametrica,
                 "docc_observacion"=> $problematica);
            }
            elseif($problematica!=null){
                $id_doc=DB::table('parametricas')->where('nombre', 'Violencia_Sexual')->where('dominio',2)->first();
                $arr_probl[$i] = array ("id_caso_fk"=>$caso->id_caso,
                    "docc_fecha"=>Carbon::now()->toDateTimeString(),
                    "docc_estado"=>'Tiene',
                    "id_parametrica_fk"=>$id_doc->id_parametrica,
                    "docc_observacion"=>$problematica);
            }
        }
        foreach ($arr_probl as $ar_p) {
           $prob=DocumentoCaso::create([
            'id_caso_fk'=>$ar_p["id_caso_fk"],
            'docc_fecha'=>$ar_p["docc_fecha"],
            'docc_estado'=>$ar_p["docc_estado"],
            'id_parametrica_fk'=>$ar_p["id_parametrica_fk"],
            'docc_observacion'=>$ar_p["docc_observacion"],
        ]);
           $prob->save();
        }
    //Antecedentes de salud
        $arr_ant= array();
        $nom_ant=$request['nom_salud'];
        $estado_ant=$request['estado_salud'];
        for ($i=0; $i < 4; $i++) {
            $id_ant=DB::table('parametricas')->where('nombre', $nom_ant[$i])->where('estado','ingreso')->first();
            if ($id_ant!=null && $nom_ant[$i]!='Otros_Documentos') {
                $arr_ant[$i] = array ("id_caso_fk"=>$caso->id_caso,
                 "docc_fecha"=>Carbon::now()->toDateTimeString(),
                 "docc_estado"=>$estado_ant[$i],
                 "id_parametrica_fk"=>$id_ant->id_parametrica,
                 "docc_observacion"=>$request['docc_observacion_medico']);
            }
            elseif($request['otro_doc_medico']!=null){
                $id_ant=DB::table('parametricas')->where('nombre', 'Otros_Documentos')->where('estado','ingreso')->first();
                $arr_ant[$i] = array ("id_caso_fk"=>$caso->id_caso,
                    "docc_fecha"=>Carbon::now()->toDateTimeString(),
                    "docc_estado"=>'Tiene',
                    "id_parametrica_fk"=>$id_ant->id_parametrica,
                    "docc_observacion"=>$request['otro_doc_medico']);
            }
        }
        foreach ($arr_ant as $ar_ant) {
           $doc_salud_in=DocumentoCaso::create([
            'id_caso_fk'=>$ar_ant["id_caso_fk"],
            'docc_fecha'=>$ar_ant["docc_fecha"],
            'docc_estado'=>$ar_ant["docc_estado"],
            'id_parametrica_fk'=>$ar_ant["id_parametrica_fk"],
            'docc_observacion'=>$ar_ant["docc_observacion"],
        ]);
           $doc_salud_in->save();
        }
    //Antecedentes de Lugar
        $id_lugar=DB::table('parametricas')->where('nombre', $request['ubicacion'])->where('dominio',3)->first();
        if ($request['ubicacion']=='Otro_Lugar') {
           $d_ob=$request['otra_ubicacion'];
        }
        else{
            $d_ob=$request['ubicacion'];
        }
        $lugar=DocumentoCaso::create([
            'id_caso_fk'=>$caso->id_caso,
            'docc_fecha'=>Carbon::now()->toDateTimeString(),
            'docc_estado'=>'Tiene',
            'id_parametrica_fk'=>$id_lugar->id_parametrica,
            'docc_observacion'=>$d_ob,
        ]);
        $lugar->save();
    //Recepcion pertenencias
        $arr_pert= array();
        $pertenencias=$request['pertenencia'];
        foreach ($pertenencias as $i => $pertenencia) {
           if ($pertenencia!=null && $pertenencia!='Otra_Pertenencia') {
            $arr_pert[$i] = array (
                "id_victima_fk"=>$vic->id_victima,
                "estado"=>'Tiene',
                "descripsion"=>$pertenencia);
        }
        elseif($request['otro_doc_medico']!=null){
         $arr_pert[$i] = array (
            "id_victima_fk"=>$vic->id_victima,
            "estado"=>'Tiene',
            "descripsion"=>$pertenencia[4]);
        }
        }
        foreach ($arr_pert as $ar_pert) {
           $pert=Pertenencia::create([
            'id_victima_fk'=>$ar_pert["id_victima_fk"],
            'estado'=>$ar_pert["estado"],
            'descripsion'=>$ar_pert["descripsion"],
        ]);
           $pert->save();
        }
    //Acciones a seguir por el refugio
        $accion_texto=array();
        $area_t=$request['area_t'];
        $descripsion_t=$request['desc_t'];
        for($i=0; $i < 5; $i++) {
            $accion_texto[$i]=array(
                "id_caso_fk"=>$caso->id_caso,
                "texto_ficha"=>'ingreso',
                "texto_area"=>$area_t[$i],
                "texto_seccion"=>'Acciones inmediatas a seguir',
                "texto_descripsion"=>$descripsion_t[$i],
                "texto_fecha"=>Carbon::now()->toDateTimeString(),
           );
        }
        foreach ($accion_texto as $accion) {
            $acciones=TextoFicha::create([
            'id_caso_fk'=>$accion["id_caso_fk"],
            'texto_ficha'=>$accion["texto_ficha"],
            'texto_area'=>$accion["texto_area"],
            'texto_seccion'=>$accion["texto_seccion"],
            'texto_descripsion'=>$accion["texto_descripsion"],
            'texto_fecha'=>$accion["texto_fecha"],
            ]);
             $acciones->save();
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