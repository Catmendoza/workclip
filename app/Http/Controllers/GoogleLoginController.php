<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\User;
 
class GoogleLoginController extends Controller
{
 
public function redirect($provider)
{
    return Socialite::driver($provider)->redirect();
}
 
public function callback($provider)
{
           
    $getInfo = Socialite::driver($provider)->user();
     
    $user = $this->createUser($getInfo,$provider);
 
    auth()->login($user);
 
    return redirect()->to('/perfil/'.$user->id.'/edit');
 
}
function createUser($getInfo,$provider){
 
 $user = User::where('provider_id', $getInfo->id)->first();
 
 if (!$user) {
     $user = User::create([
        'nombre'     => $getInfo->name,
        'imagen'=>"/imagenes_usuarios/usuario.png",
        'texto_quiensoy'=>"Aqui debes poner  tu descripcion",
        'instagram'=>"#",
        'facebook'=>'#',
        'git'=>'#',
        'email'    => $getInfo->email,
        'provider' => $provider,
        'provider_id' => $getInfo->id
    ]);
  }
  return $user;
}
}