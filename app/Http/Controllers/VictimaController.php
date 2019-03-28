<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Victima;

class VictimaController extends Controller
{
    //envía los datos del usuario logueado a la vista.
  public function profile($id_vic) {
    $victima = Victima::find($id_vic);
    return view('casos/profile', ['victima' => $victima]);
  }

  //valida que sea una imagen lo que enviamos, la sube a la carpeta public/uploads/avatars  y después guarda el nombre en la base de datos y volvemos al perfil.
  public function update_profile(Request $request,$id_vic) {
    $this->validate($request, [
      'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);
    $filename =$id_vic.'_'.time().'.'. $request->avatar->getClientOriginalExtension();
    $request->avatar->move(public_path('uploads/avatars'), $filename);

    $victima = Victima::find($id_vic);
    $victima->avatar = $filename;
    $victima->save();
     return redirect()->action('VictimaController@profile',$victima);
  }
}
