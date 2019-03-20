<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Persona;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct() {
    $this->middleware('auth')->only('usuario/profile', 'update_profile');
  }
  //envía los datos del usuario logueado a la vista.
  public function profile() {
    $user = Auth::user();
    return view('usuario/profile', ['user' => $user]);
  }
  //valida que sea una imagen lo que enviamos, la sube a la carpeta public/uploads/avatars  y después guarda el nombre en la base de datos y volvemos al perfil.
  public function update_profile(Request $request) {
    $this->validate($request, [
      'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);

    $filename = Auth::id().'_'.time().'.'.$request->avatar->getClientOriginalExtension();
    $request->avatar->move(public_path('uploads/avatars'), $filename);

    $user = Auth::user();
    $user->avatar = $filename;
    $user->save();

    return redirect()->route('user.profile');
  }
  public function index (){
    /*$personas=Persona::orderBy('id_persona','ASC')
    ->paginate(2);
    $users=User::orderBy('id_persona_fk','ASC')
    ->paginate(2);
    */
    $personas=DB::table('personas')
    ->join('users','personas.id_persona','=','users.id_persona_fk')
    ->orderBy('id_persona_fk','ASC')
    ->paginate(2);
    return view('usuario.index',compact('personas'));
    }

    //del formulario index.blade de usuario el boton editar
    public function edit($id_personas){
      $person=DB::table('personas')
    ->join('users','personas.id_persona','=','users.id_persona_fk')
    ->where('personas.id_persona','=',$id_personas)
    ->select('personas.*','personas.id_persona as id_persona','users.email as email','users.usuario as usuario')
    ->first();
      return view('usuario.edit',compact('person'));
    }

    //del form edit.blade seactualizra  los datos
    public function update(Request $request,$person_id){
      $personas=Persona::find($person_id);
      $personas->persona_nombre=$request->input('p_nombre');
      $personas->persona_apellido=$request->input('p_apellido');
      $personas->persona_ci=$request->input('p_ci');
      $personas->persona_telefono=$request->input('p_telefono');
      $personas->persona_celular=$request->input('p_celular');
      $personas->save();

     /* $usu=User::where('id_persona_fk','=',$person_id);
      $usu->usuario=$request->input('p_usua');
      $usu->email=$request->input('p_email');
      $usu->update();  */
        $usu= User::findOrFail($person_id);   
       $usu->fill(array(
                'usuario'=>$request->input('p_usua'),
                'email'=>$request->input('p_email')
            ))->update();
 
      return redirect()->route('users.index');
    }

    public function show(){

    }

    public function destroy($id){
     $p=Persona::find($id);
     $u= User::find($id);
     if ($p->id_persona == $u->id_persona_fk) {
        $u->delete();

       $p->delete();
       Session::flash('message','Eliminacion exitosa');
      return redirect()->route('users.index'); 
     }
     else{
      Session::flash('message','no se pudo eliminar');
      return redirect()->route('users.index');
     }
         
    }
}
