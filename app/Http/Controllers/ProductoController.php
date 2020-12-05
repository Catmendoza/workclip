<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Comentario;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::paginate(3);
        $comentario = Comentario::all();
        return view("producto")->with('productos',$producto)->with('comentarios',$comentario);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
            return redirect("/publicaciones");
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

        $producto = new Producto();
        $producto->id_perfil = Auth::user()->id;
      
        $producto->nombre_producto = request('nombre_producto');
        $producto->descripcion =request('descripcion');
        $producto->precio = request('precio');

        $archivo = $request->file("imagen");
        $destino = "imagenes_usuarios/";
        $nombre = strtotime(date("Y-m-d-H:isa")).$archivo->getClientOriginalName();
        $archivo->move($destino,$nombre);


       
        $producto->imagen = $destino.$nombre;
        $producto->save();

        return redirect("/publicaciones");
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

        
        $producto = Producto::findOrFail($id);
        $producto->delete();
        $comentario = Comentario::all()->where('id_producto','=',$id);

        foreach($comentario as $comentarios){
            $comentarios->delete();
        }
        return redirect('/publicaciones');
    }
}
