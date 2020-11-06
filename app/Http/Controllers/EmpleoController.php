<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleo;
use Illuminate\Support\Facades\Auth;

class EmpleoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return redirect("/publicaciones");
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

        $empleo = new Empleo();
        $empleo->id_perfil = Auth::user()->id;
      
        $empleo->titulo_trabajo = request('titulo_trabajo');
        $empleo->tiempo_trabajo =request('tiempo_trabajo');
        $empleo->tipo_empleo = request('tipo_empleo');
        $empleo->tipo_contrato = request('tipo_contrato');
        $empleo->salarioi = request('salarioi');
        $empleo->salariof = request('salariof');
        $empleo->recibirhv = request('recibirhv');
        $empleo->descripcion_empleo = request('descripcion_empleo');
        $empleo->save();

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
    }
}
