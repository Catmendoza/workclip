<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::USER;

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
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'cedula' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contacto' => ['required', 'string', 'max:255'],
            'programa' => ['required', 'string', 'max:255'],
            'usuario' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'edad' => ['required', 'numeric'],
            'rol'=> ['required','numeric'],
            'imagen'=>['required','string'],
            'texto_quiensoy'=>['required','string'],
            'nombre_empresa'=>['required','string'],
            'instagram'=>['required','string'],
            'facebook'=>['required','string'],
            'git'=>['required','string'],
            
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

        return User::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'cedula' => $data['cedula'],
            'email' => $data['email'],
            'contacto' => $data['contacto'],
            'programa' => $data['programa'],
            'usuario' => $data['usuario'],
            'password' => Hash::make($data['password']),
            'edad' => $data['edad'],
            'rol' => $data['rol'],
            'imagen'=>$data['imagen'],
            'texto_quiensoy'=>$data['texto_quiensoy'],
            'nombre_empresa'=>$data['nombre_empresa'],
            'instagram'=>$data['instagram'],
            'facebook'=>$data['facebook'],
            'git'=>$data['git'],
        ]);
    }
}
