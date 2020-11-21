<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Habilidades;

use Illuminate\Support\Facades\Auth;


class HabilidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('createhabilidades');

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        
        $habilidades = new Habilidades();
        $habilidades->id_perfil = request('id_perfil');
      
        $habilidades->titulo1 = request('titulo1');
        $habilidades->principal_texto1=request('principal_texto1');
        $habilidades->titulo2 = request('titulo2');
        $habilidades->principal_texto2=request('principal_texto2');
        $habilidades->titulo3 = request('titulo3');
        $habilidades->principal_texto3=request('principal_texto3');

        $habilidades->save();

        return redirect('/edit-habilidades');
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
        $aux = Habilidades::all()->where('id_perfil','=',$id);


        return view('edithabilidades',['datos'=>$aux]);
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


        $habilidades = Habilidades::findOrFail($id);
        $habilidades->id_perfil  =$request->get('id_perfil');
        $habilidades->titulo1 = $request->get('titulo1');
        $habilidades->principal_texto1=$request->get('principal_texto1');
        $habilidades->titulo2 = $request->get('titulo2');
        $habilidades->principal_texto2=$request->get('principal_texto2');
        $habilidades->titulo3 = $request->get('titulo3');
        $habilidades->principal_texto3=$request->get('principal_texto3');

        
        $habilidades->update();
        
        return view('edithabilidades',['datos'=>$habilidades]);
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
