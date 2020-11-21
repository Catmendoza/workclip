<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Perfil;
use App\User;
use App\Proyecto;
use App\Hobby;
use App\Producto;
use App\Empleo;
use App\Habilidades;
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

        $usuario = Auth::user()->all()->where('id','=',Auth::user()->id);
        $hobbys = Hobby::all()->where('id_perfil','=',Auth::user()->id);
        $habilidades = Habilidades::all()->where('id_perfil','=',Auth::user()->id);
        $proyecto = Proyecto::all()->where('id_perfil','=',Auth::user()->id);
        $producto = Producto::all()->where('id_perfil','=',Auth::user()->id);
        $empleo = Empleo::all()->where('id_perfil','=',Auth::user()->id);

        return view("user")->with('usuarios',$usuario)->with('proyectos',$proyecto)->with('habilidad',$habilidades)->with('hobby',$hobbys)
        ->with('productos',$producto)->with('empleos',$empleo);
    }

    public function perfiles( Request $request){

 
        if ($request){
            $query = trim($request->get('search'));
            $usuario = User::where('nombre','LIKE','%'.$query.'%')->orderBy('id','asc')->paginate(3);

       

            
        return view('searchprofiles',['usuarios'=>$usuario,'search'=>$query]);
        }
        
     



     
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
     * Display the specified resourwce.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $perfil = User::findOrFail($id);
        $proyecto = Proyecto::all()->where('id_perfil','=',$perfil->id);
        $hobbys = Hobby::all()->where('id_perfil','=',$perfil->id);
        $habilidades = Habilidades::all()->where('id_perfil','=',$perfil->id);
        $producto = Producto::all()->where('id_perfil','=',$perfil->id);
        $empleo = Empleo::all()->where('id_perfil','=',$perfil->id);

        return view('users')->with('proyectos',$proyecto)->with('usuario',$perfil)->with('habilidad',$habilidades)->with('hobby',$hobbys)
        ->with('productos',$producto)->with('empleos',$empleo);;
        


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

        return view('editperfil',['datos'=>User::findOrFail($id)])->with('usuarios',$usuario);
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
        $perfil->nombre = $request->get('nombre');
        $perfil->texto_quiensoy =$request->get('texto_quiensoy');
        $perfil->instagram =$request->get('instagram');
        $perfil->facebook =$request->get('facebook');
        $perfil->git =$request->get('git');
        $perfil->programa = $request->get('programa');
        $perfil->contacto = $request->get('contacto');
        $perfil->email = $request->get('email');

    
    

        if($request->file("imagen")==null){
            $perfil->imagen = User::findOrFail($id)->imagen;
        

        }else{
        $archivo = $request->file("imagen");
        $destino = "imagenes_usuarios/";
        $nombre = strtotime(date("Y-m-d-H:isa")).$archivo->getClientOriginalName();
        $archivo->move($destino,$nombre);
        $perfil->imagen = $destino.$nombre;
        }

       


        $perfil->update();
        
        return redirect('/perfil/'.$id.'/edit');
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
