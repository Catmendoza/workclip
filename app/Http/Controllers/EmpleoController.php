<?php

namespace App\Http\Controllers;
use App\Empleo;
use Illuminate\Http\Request;
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
        
        $empleo = Empleo::all();


        return redirect("/empleo",["empleos"=>$empleo]);
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

        $empleo = new Empleo();

        $empleo->id_perfil = Auth::user()->id;
      
        $empleo->titulo_trabajo = request('titulo_trabajo');
        if (request('time-remoto')!= null) {
            $empleo->tiempo_trabajo =1;
        }else{
            $empleo->tiempo_trabajo =2;
        }
        if (request('jod-completo')!=null) {
            $empleo->tipo_empleo = 1;
        }else if (request('jod-medio')!=null) {
            $empleo->tipo_empleo = 2;
        }else{
            $empleo->tipo_empleo = 3;
        }
       
        $empleo->tipo_contrato = request('tipo_contrato');
        $empleo->saliarioi = request('salarioi');
        $empleo->salariof = request('salariof');
        if (request('hv_si')!=null) {
            $empleo->recibirhv = 1;
        }else{
            $empleo->recibirhv =0;
        }
        
        $empleo->descripcion_empleo = request('descripcion_empleo');

        $empleo->save();

        return redirect("/main");
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
