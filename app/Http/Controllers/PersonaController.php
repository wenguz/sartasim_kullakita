<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
class PersonaController extends Controller
{
    public function store(Request $request){
    	$request->validate([
            'persona_nombre'=> 'required',
            'persona_apellido' => 'required',
            'persona_ci' => 'required',
            'persona_telefono' => 'required',
            'persona_celular' => 'required',
        ]);
    	//para registrar datos de Personas
        return Persona::create($request->all());
    }
}
