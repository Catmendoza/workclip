<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SubirProyectosRequest;



class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        
    $proyecto = Proyecto::all();

    //$proyecto = Proyecto::all();
//        $proyecto = DB::table("proyectos")->paginate(3);
  

        

        return view("main",["proyectos"=> $proyecto]);

       

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("main");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubirProyectosRequest $request)
    {
        //

        $proyecto = new Proyecto();
        $proyecto->id_perfil = Auth::user()->id;
      
        $proyecto->nombre_proyecto = request('nombre_proyecto');
        $proyecto->descripcion =request('descripcion');
        $proyecto->estado_proyecto = request('estado_proyecto');
        $proyecto->finalidad_proyecto = 1;

        $archivo = $request->file("imagen");
        $destino = "imagenes_usuarios/";
        $nombre = strtotime(date("Y-m-d-H:isa")).$archivo->getClientOriginalName();
        $archivo->move($destino,$nombre);

        $proyecto->imagen = $destino.$nombre;
        $proyecto->save();

        return redirect("/proyecto");

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
