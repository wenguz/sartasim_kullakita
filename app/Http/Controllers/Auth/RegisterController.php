<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Persona;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'usuario' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'email' => 'required|string'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $persona = Persona::create([
            'persona_nombre'=> $data['persona_nombre'],
            'persona_apellido' => $data['persona_apellido'],
            'persona_ci' => $data['persona_ci'],
            'persona_telefono' =>$data['persona_telefono'],
            'persona_celular' => $data['persona_celular'],
        ]);
        $persona->save();
       
        $user=User::create([
            'usuario' => $data['usuario'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'id_persona_fk'=>$persona->id_persona,
        ]);
        $user->save();
        return redirect()->route('users.index');
    }
}
