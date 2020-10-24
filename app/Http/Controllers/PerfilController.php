<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Perfil;
use App\User;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $usuario = Auth::user()->all();

        return view("user")->with('usuarios',$usuario);
    }

    public function perfiles(){
        $usuario = User::paginate(3);



        return view('profiles')->with('usuarios',$usuario);
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $usuario = Auth::user()->all();
        


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario = Auth::user()->all();

        return view('useredit',['datos'=>User::findOrFail($id)])->with('usuarios',$usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $perfil = User::findOrFail($id);
        $perfil->nombre =$request->get('nombre');
        $perfil->texto_quiensoy =$request->get('texto_quiensoy');
        $perfil->instagram =$request->get('instagram');
        $perfil->facebook =$request->get('facebook');
        $perfil->git =$request->get('git');
        
        if($request->file("imagen")==null){
            $perfil->imagen ="/imagenes_usuarios/usuario.png";
        

        }else{
        $archivo = $request->file("imagen");
        $destino = "imagenes_usuarios/";
        $nombre = strtotime(date("Y-m-d-H:isa")).$archivo->getClientOriginalName();
        $archivo->move($destino,$nombre);
        $perfil->imagen = $destino.$nombre;
        }

       


        $perfil->update();
        
        return redirect('/perfil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
