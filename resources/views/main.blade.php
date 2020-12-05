@extends('layout')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('sass/cssindex.css') }}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <link rel="stylesheet" href="{{ asset('css/modal-public.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal-publish-job.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal-publish-project.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal-publish-product.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal-comentarios.css') }}" />

@endsection

@section('content')


    <section class="nav-bar-main">
        <div class="navbar navbar-expand-lg navbar-light  lighten-5  " style="background-color: white">

            <div class="container-nav-bar">
                <div class="form-nav-bar">
                    <form class="form-inline">
                        <div class="form-group has-search">
                          
                        </div>
                    </form>
                </div>

                @guest
                    @if (Route::has('register'))
                            
                   

                <div class="buttons-nav-bar">
                    <a class="active" href="{{url("/publicaciones")}}" class="btn btn-lg">
                        <i class="fas fa-home"></i>
                      
                    </a>

                </div>

                <div class="buttons-nav-bar">
                    <a href="/perfiles" class="btn btn-lg">
                        <i class="fa fa-user-plus"></i>
                      
                    </a>
                </div>
                @endif

                @else
                <div class="buttons-nav-bar">
                    <a class="active" href="{{url("/publicaciones")}}" class="btn btn-lg">
                        <i class="fas fa-home"></i>
                     
                    </a>
                </div>

                <div class="buttons-nav-bar">
                    <a href="/perfiles" class="btn btn-lg">
                        <i class="fa fa-user-plus"></i>
                      
                    </a>
                </div>

                <div class="buttons-nav-bar">
                    <button class="btn btn-lg" id="btn-public">
                        <i class="fa fa-plus-circle"></i>
                     
                    </button>
                </div>

                @endguest
            </div>
        </div>

    </section>

    



          
    <section class="sect-content-post">
        <div class="container-grid-post">
    
            <div class="content-post-main">

              @foreach ($proyectos->reverse() as $proyecto)
                <div class="col-md-7">


                    
                    @php
                    $aux = DB::table('users')->find($proyecto->id_perfil);
                    $mes = $proyecto->created_at->format('m');
                     $mesD;
                     switch($mes){
                         case 1:
                         $mesD = "ENE";

                         break;

                         case 2:
                         $mesD = "FEB";
                         break;

                         case 3:
                         $mesD = "MAR";
                         break;

                         case 4:
                         $mesD = "ABR";
                         break;
                         
                         case 5:
                         $mesD ="MAY";
                         break;
                         
                         case 6:
                         $mesD = "JUN";
                         break;

                         case 7:
                         $mesD = "JUL";
                         break;

                         case 8:
                         $mesD = "AGO";
                         break;

                         case 9:
                         $mesD = "SEP";
                         break;

                         case 10:
                         $mesD = "OCT";
                         break;

                         case 11:
                         $mesD = "NOV";
                         break;

                         case 12:
                         $mesD ="DIC";
                         break;

                         
                     }
                  
                     @endphp


                    <div class="header-box-main">
                        
                        <div class="img-user-header">
                            
                            

                            <a href="{{route("perfil.show",$aux->id)}}"><img  src="{{ asset($aux->imagen) }}" alt="" class="rounded-circle float-left imgpeque"></a>
                        </div>

                        <div class="name-user-box">
                        <a   href="{{route("perfil.show",$aux->id)}}"style="color:white; cursor: pointer;"class="textWhite">{{$aux->nombre}}</a>
                            <h6 class="textWhite">{{$aux->programa}}</h6>
                            
                        </div>

                        <div class="fecha-box">
                            <label>{{$proyecto->created_at->format('d')}}{{"  ".$mesD}}</label>
                            
                        </div>
                        

                    </div>

                    <div class="box-main-content">

                        <div class="header-box-ppe">
                            <h6 style="color:#979797">{{ $proyecto->nombre_proyecto }}</h6>
                            <hr>
                            
                        </div>

                        <div class="img-box-ppe">
                            <img src="{{ asset($proyecto->imagen) }}">
                        </div>

                        <div class="description-box">
                           <p>{{ $proyecto->descripcion }}</p>



               
                            
                        </div>


                   
                         
                        
@if (Auth::user()->rol==3)
<form action="{{route('proyecto.destroy',$proyecto->id)}}" method="POST">
    @csrf
    @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>

</form>
                        @endif
                    </div>
                    @php
                    $contComents=DB::table('comentarios')->where('id_proyecto','=',$proyecto->id)->count();
                    @endphp
                    <button class="accordion" >Comentarios {{$contComents}}</button>
                      
                    <div class="panel">
                    <div class="caja_comentarios">

@foreach ($comentarios as $comentario)
@if($comentario->id_proyecto == $proyecto->id)
         
      @php
      
      $aux2 = DB::table('users')->find($comentario->id_usuario);
      @endphp
<div class="caja_comentario">
  <div class="caja_fotoComentario">
  <a  href="{{route("perfil.show",$comentario->id)}}"style="color:white; cursor: pointer;"><img src="{{$aux2->imagen}}"></a>
      
  </div>

  <div class="caja_textoComentario">
      <label>{{$aux2->nombre}}</label>
      <p>{{$comentario->contenido_texto}}</p>
  </div>


 </div>
 @endif

@endforeach



@guest

@if (Route::has('register'))

  @endif

  @else
  <form action="./comentario" method="POST" class="caja_comentar">
@csrf
  <div class="caja_fotoComentar">
 
  @php
                        $aux = DB::table('users')->find($proyecto->id_perfil);
                        $mes = $proyecto->created_at->format('m');
                         $mesD;
                         switch($mes){
                             case 1:
                             $mesD = "ENE";

                             break;

                             case 2:
                             $mesD = "FEB";
                             break;

                             case 3:
                             $mesD = "MAR";
                             break;

                             case 4:
                             $mesD = "ABR";
                             break;
                             
                             case 5:
                             $mesD ="MAY";
                             break;
                             
                             case 6:
                             $mesD = "JUN";
                             break;

                             case 7:
                             $mesD = "JUL";
                             break;

                             case 8:
                             $mesD = "AGO";
                             break;

                             case 9:
                             $mesD = "SEP";
                             break;

                             case 10:
                             $mesD = "OCT";
                             break;

                             case 11:
                             $mesD = "NOV";
                             break;

                             case 12:
                             $mesD ="DIC";
                             break;

                             
                         }
                      
                         @endphp
 
                        <img src="{{asset(Auth::user()->imagen)}}">
    
  </div>

   <input type="hidden" name="id_proyecto" value="{{$proyecto->id}}">
   <input type="hidden" name="id_usuario"value="{{Auth::user()->id}}">
    <input class="input_comentar" type="text" name="contenido_texto">
    <button type="submit">Publicar</button>
   
  
  </form>

  @endguest
</div>

                        </div>
                 <div>
             
                 </div>

                 
         

                </div>

                @endforeach



              





<!--Productos-->

@foreach ($productos->reverse() as $producto)
                <div class="col-md-7">

                    @php
                    $aux = DB::table('users')->find($producto->id_perfil);
                    $mes = $producto->created_at->format('m');
                     $mesD;
                     switch($mes){
                         case 1:
                         $mesD = "ENE";

                         break;

                         case 2:
                         $mesD = "FEB";
                         break;

                         case 3:
                         $mesD = "MAR";
                         break;

                         case 4:
                         $mesD = "ABR";
                         break;
                         
                         case 5:
                         $mesD ="MAY";
                         break;
                         
                         case 6:
                         $mesD = "JUN";
                         break;

                         case 7:
                         $mesD = "JUL";
                         break;

                         case 8:
                         $mesD = "AGO";
                         break;

                         case 9:
                         $mesD = "SEP";
                         break;

                         case 10:
                         $mesD = "OCT";
                         break;

                         case 11:
                         $mesD = "NOV";
                         break;

                         case 12:
                         $mesD ="DIC";
                         break;

                         
                     }
                  
                     @endphp

                    <div class="header-box-main">
                        <div class="img-user-header">
                            <a href="{{route("perfil.show",$aux->id)}}"> <img src="{{ asset($aux->imagen) }}" alt="" class="rounded-circle float-left imgpeque"></a>
                          
                        </div>

                      

                        <div class="name-user-box">
                    
                            <a   href="{{route("perfil.show",$aux->id)}}"style="color:white; cursor: pointer;"class="textWhite"><h4 class="textWhite">{{$aux->nombre}}</h4></a>
                            <h6 class="textWhite">{{$aux->programa}}</h6>
                        </div>

                        <div class="fecha-box">
                            <label>{{$producto->created_at->format('d')}}{{"  ".$mesD}}</label>
                        </div>

                    </div>

                    <div class="box-main-content">

                        <div class="header-box-ppe">
                            <h6 style="color:#979797">{{ $producto->nombre_proyecto }}</h6>
                            <hr>
                        </div>

                        <div class="img-box-ppe">
                            <img src="{{ asset($producto->imagen) }}">
                        </div>

                        <div class="description-box">
                           <p>{{$producto->descripcion}}</p>
                           <p>${{$producto->precio}}</p>



               
                            
                        </div>


                   
                         
                        
                        
                        @if (Auth::user()->rol==3)
                        <form action="{{route('producto.destroy',$producto->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                        
                        </form>
                                                @endif
                        
                    </div>
                    
                    @php
                    $contComents=DB::table('comentarios')->where('id_producto','=',$producto->id)->count();
                    @endphp
                    <button class="accordion" >Comentarios {{$contComents}}</button>
                      
                    <div class="panel">
                    <div class="caja_comentarios">

@foreach ($comentarios as $comentario)
@if($comentario->id_producto == $producto->id)
         
      @php
      
      $aux2 = DB::table('users')->find($comentario->id_usuario);
      @endphp
<div class="caja_comentario">
  <div class="caja_fotoComentario">
      
  <a href="{{route("perfil.show",$comentario->id)}}"style="color:white; cursor: pointer;"><img src="{{asset($aux2->imagen)}}"></a>
  </div>

  <div class="caja_textoComentario">
      <label>{{$aux2->nombre}}</label>
      <p>{{$comentario->contenido_texto}}</p>
  </div>


 </div>
 @endif

@endforeach



@guest

@if (Route::has('register'))

  @endif

  @else
  <form action="./comentario" method="POST" class="caja_comentar">
@csrf
  <div class="caja_fotoComentar">

  <img src="{{asset(Auth::user()->imagen)}}">
     
    
  </div>

   <input type="hidden" name="id_producto" value="{{$producto->id}}">
   <input type="hidden" name="id_usuario"value="{{Auth::user()->id}}">
    <input class="input_comentar" type="text" name="contenido_texto">
    <button type="submit">Publicar</button>
   
  
  </form>

  @endguest
</div>

          </div>
                 <div>
             
                 </div>


                </div>

                @endforeach





<!--Empleos-->

@foreach ($empleos->reverse() as $empleo)
                <div class="col-md-7">

                    @php
                    $aux = DB::table('users')->find($empleo->id_perfil);
                    $mes = $empleo->created_at->format('m');
                     $mesD;
                     switch($mes){
                         case 1:
                         $mesD = "ENE";

                         break;

                         case 2:
                         $mesD = "FEB";
                         break;

                         case 3:
                         $mesD = "MAR";
                         break;

                         case 4:
                         $mesD = "ABR";
                         break;
                         
                         case 5:
                         $mesD ="MAY";
                         break;
                         
                         case 6:
                         $mesD = "JUN";
                         break;

                         case 7:
                         $mesD = "JUL";
                         break;

                         case 8:
                         $mesD = "AGO";
                         break;

                         case 9:
                         $mesD = "SEP";
                         break;

                         case 10:
                         $mesD = "OCT";
                         break;

                         case 11:
                         $mesD = "NOV";
                         break;

                         case 12:
                         $mesD ="DIC";
                         break;

                         
                     }
                  
                     @endphp

                    <div class="header-box-main">
                        <div class="img-user-header">
                            <a href="{{route("perfil.show",$aux->id)}}"> <img src="{{ asset($aux->imagen) }}" alt="" class="rounded-circle float-left imgpeque"></a>
                          
                        </div>

                      

                        <div class="name-user-box">
                    
                            <a   href="{{route("perfil.show",$aux->id)}}"style="color:white; cursor: pointer;"class="textWhite"><h4 class="textWhite">{{$aux->nombre}}</h4></a>
                            <h6 class="textWhite">{{$aux->programa}}</h6>
                        </div>

                        <div class="fecha-box">
                            <label>{{$empleo->created_at->format('d')}}{{"  ".$mesD}}</label>
                        </div>

                    </div>

                    <div class="box-main-content">

                        <div class="header-box-ppe">
                            <h6 style="color:#979797">EMPLEO PARA : {{ $empleo->titulo_trabajo }}</h6>
                            <hr>
                        </div>

                        <div class="img-box-ppe" style="flex-direction: column">

                            @if($empleo->tiempo_trabajo== 1)
                            <h6 style="color:#979797">Tiempo del empleo:      Remoto</h6><br>
                            @endif
                            @if($empleo->tiempo_trabajo== 2)
                            <h6 style="color:#979797">Tiempo del empleo:  Presencial</h6><br>
                            @endif


                            @if($empleo->tipo_empleo== 1)
                            <h6 style="color:#979797">Tipo de empleo : Tiempo completo</h6><br>
                            @endif
                            @if($empleo->tipo_empleo== 2)
                            <h6 style="color:#979797">Tipo de empleo : Medio tiempo</h6><br>
                            @endif
                            @if($empleo->tipo_empleo== 3)
                            <h6 style="color:#979797">Tipo de empleo : De preferencia</h6><br>
                            @endif




                           
                     
                            <h6 style="color:#979797">Tipo de contrato  {{ $empleo->tipo_contrato }}</h6><br>
                        </div>

                        <div class="description-box">
                           <p>DESCRIPCION DEL EMPLEO:<BR>{{$empleo->descripcion_empleo}}</p>
                        <p>SALARIO :  ${{$empleo->salarioi}} a  {{$empleo->salariof}}</p>


 
                            
                        </div>


                   
                         
                        
                        @if (Auth::user()->rol==3)
                        <form action="{{route('empleo.destroy',$empleo->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                        
                        </form>
                                                @endif
                        
                    </div>
                    @php
                    $contComents=DB::table('comentarios')->where('id_empleo','=',$empleo->id)->count();
                    @endphp
                    <button class="accordion" >Comentarios {{$contComents}}</button>
                      
                    <div class="panel">
                    <div class="caja_comentarios">

@foreach ($comentarios as $comentario)
@if($comentario->id_empleo == $empleo->id)
         
      @php
      
      $aux2 = DB::table('users')->find($comentario->id_usuario);
      @endphp
<div class="caja_comentario">
  <div class="caja_fotoComentario">
      
  <a href="{{route("perfil.show",$comentario->id)}}"style="color:white; cursor: pointer;"><img src="{{asset($aux2->imagen)}}"></a>
  </div>

  <div class="caja_textoComentario">
      <label>{{$aux2->nombre}}</label>
      <p>{{$comentario->contenido_texto}}</p>
  </div>


 </div>
 @endif

@endforeach



@guest

@if (Route::has('register'))

  @endif

  @else
  <form action="./comentario" method="POST" class="caja_comentar">
@csrf
  <div class="caja_fotoComentar">

  <img src="{{asset(Auth::user()->imagen)}}">
     
    
  </div>

   <input type="hidden" name="id_empleo" value="{{$empleo->id}}">
   <input type="hidden" name="id_usuario"value="{{Auth::user()->id}}">
    <input class="input_comentar" type="text" name="contenido_texto">
    <button type="submit">Publicar</button>
   
  
  </form>

  @endguest
</div>

          </div>
                 <div>
             
                 </div>


                </div>

                @endforeach

                @php
                 
                 $auxProject = DB::table('proyectos')->count();
                 $auxProduct =  DB::table('productos')->count();
                 $auxJob = DB::table('empleos')->count();
                @endphp
                
                @if ($auxProject >= 1 || $auxProduct >=1 || $auxJob >= 1)
                    {{$proyectos->links()}}
                    
                @endif

            
                


              
            </div>


            <form method="POST" action ="/retornar"class="content-filter-post">
                <!--Filtro-->

                @csrf
                <div class="col-md-3" style="height: 300px; border-radius: 10px; background-color: #1a2243">
                    <div class="content-filter">

                        <div class="header-filter-box">
                            <div class="box-filter-title">
                                <label>Filtro</label>
                            </div>

                        </div>
                        

                        <h5 style="margin-top: 20px;margin-left: 20px; color: white;text-align: left">Categoria</h5>

                        <div class="checkbox " style="margin-left: 10px;line-height:10px">
                            <label style="color:white;font-size:20px; ">
                                <input checked name="opc" id="opc1"  value="1"type="radio">
                               Publicaciones
                            </label>

                        </div>
                        <div class="checkbox " style="margin-left: 10px;line-height:10px">
                            <label style="color:white;font-size:20px; ">
                                <input name="opc"id="opc2"  value="2" type="radio">
                                Proyectos
                            </label>

                        </div>
                        <div class="checkbox" style="margin-left: 10px; line-height:10px; ">

                            <label style="color:white;font-size:20px">
                                <input name="opc"id="opc3" value="3"type="radio">
                                Productos
                            </label>
                        </div>
                        <div class="checkbox" style="margin-left: 10px; line-height:10px; ">

                            <label style="color:white;font-size:20px">
                                <input name="opc"id="opc4" value="4" type="radio">
                                Empleos
                            </label>
                        </div>
<div><button type="submit" class="btn btn-light">Filtrar</button></div>
                        
                    </div>

                </div>
            </form>


            

        </div>

        


    </section>





    @guest
    @if (Route::has('register'))
   


    @endif

    @else
    <div id="publicModal" class="modal-public-main">
        <div class="modal-public-content">

            <div class="header-modal">
                <h4>Publicar</h4>
                <div class="close-modal-public">
                    <a><i class="fas fa-times"></i></a>
                </div>

            </div>
            <h4>¿Que quieres publicar?</h4>
            <div class="select-modal-public">

                <div class="select-box">
                    <a id="btn-publicProject"><i class="fas fa-desktop"></i></a>
                    <h4>Proyecto</h4>
                </div>
                <div class="select-box">
                    <a id="btn-publicProduct"><i class="fas fa-tags"></i></a>
                    <h4>Producto</h4>
                </div>

            </div>

            @if (Auth::user()->rol == 0)
            <div class="select-modal-public">
                <div class="select-box">
                    <a id="btn-publicJob"><i class="fas fa-id-badge"></i></a>
                    <h4>Oferta de trabajo</h4>
                </div>
            </div>
            @endif

        </div>


    </div>
    @endguest

    <div id="publicProduct" class="modal-publish-project">
        <div class="modal-pp-content">
            <div class="header-modal-pp">
                <h3>Publicar Producto</h3>
                <div class="close-public-product">
                    <a><i class="fas fa-times"></i></a>
                </div>
            </div>

            <form class="body-modal-pp" action="./producto" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-side-left">

                    <div class="titles-box-pp">
                        <h3>Titulo</h3>
                    </div>

                    <div class="box-texts">
                        <input type="text" name="nombre_producto" id="" required>
                    </div>

                    <div class="titles-box-pp">
                        <h3>Descripcion</h3>
                    </div>

                    <div class="box-texts">
                        <textarea type="text" name ="descripcion"maxlength="200" required></textarea>
                    </div>

                    <div class="titles-box-pp">
                        <h3>Precio</h3>
                    </div>

                    <div class="box-select left">
                        <input type="number" name="precio"  min="200" required>

                    </div>

                </div>

                <div class="modal-side-right">

                    <div class="titles-box-pp">
                        <h3>Adjuntar imagen</h3>
                    </div>

                    <div class="box-file">

                        <input type="file" name="imagen" id="" required>
                    </div>

                    <div class="btn-submit-pp">
                        <button type="submit">Publicar</button>
                    </div>


                </div>
            </form>

        </div>
    </div>



    <div id="publicJobModal" class="modal-publish-job">
        <form class="modal-pj-content" action="./empleo" method="POST" >
            @csrf
            <div class="header-modal-pj">
                <h3>Publicar empleo</h3>
                <div class="close-modal-pj">
                    <a><i class="fas fa-times"></i></a>
                </div>
            </div>

            <div class="body-modal-pj">
                <div class="titles-modal-pj">
                    <h3>Titulo del empleo</h3>
                </div>

                <div class="titles-modal-pj">
                    <h3>Tiempo del empleo</h3>
                </div>
                <div class="titles-modal-pj">
                    <h3>Tipo de empleo</h3>
                </div>
                <div class="titles-modal-pj">
                    <h3>Tipo de contrato</h3>
                </div>
                <div class="titles-modal-pj" style="border-radius: 0 0 0 0.5em">
                    <h3>Salario</h3>
                </div>

                <div class="box-texts-pj">
                    <input type="text" name="titulo_trabajo" id=""required />
                </div>

                <div class="radio-btns-pj">
                    <input type="radio" name="tiempo_trabajo"value="1" id="" required/>
                    <label>Remoto</label>
                    <input type="radio" name="tiempo_trabajo"value="2" id="" />
                    <label>Presencial</label>
                </div>

                <div class="radio-btns-pj" >
                    <input type="radio" name="tipo_empleo" value="1" id="" required/>
                    <label>Tiempo completo</label>
                    <input type="radio" name="tipo_empleo" value="2" id="" />
                    <label>Medio tiempo</label>
                    <input type="radio" name="tipo_empleo" value="3" id="" />
                    <label>De preferencia</label>
                </div>

                <div class="box-select-pj">
                    <select name="tipo_contrato" id="" required >
                        <option value="0">Selecciona una opcion</option>
                        <option value="1">1</option>
                    </select>
                </div>

                <div class="salary-box">
                    <div class="range-salary">
                        <h4>$</h4>
                        <div class="range one">
                            <input type="number" name="salarioi" placeholder=" ej: 700000" id="" required/>
                        </div>
                        <h4>a</h4>
                        <div class="range two">
                            <input type="number" placeholder=" 900000" name="salariof" id="" required/>
                        </div>
                    </div>
                </div>

                <div class="titles-modal-pj">
                    <h3>Recibir notificaciones (Opcional)</h3>
                </div>
                <div class="titles-modal-pj">
                    <h3>Desea recibir HV</h3>
                </div>
                <div class="titles-modal-pj" style="border-radius: 0 0 0.5em 0.5em">
                    <h3>Descripcion del empleo</h3>
                </div>

                <div class="email-box-pj">
                    <h4>Email</h4>
                    <input type="email" name="" id="" />
                </div>

                <div class="radio-btns-pj" style="grid-column-start: 4; grid-row-start: 2">
                    <input type="radio" name="recibirhv" value="1"id="" required/>
                    <label>Si</label>
                    <input type="radio" name="recibirhv" value="2"id="" />
                    <label>No</label>
                </div>

                <div class="box-texts-pj" style="grid-column-start: 4; grid-row-start: 3">
                    <textarea type="text" name="descripcion_empleo" maxlength="200" required></textarea>
                </div>

                <div class="btn-submit-pj">
                    <button type="submit">Publicar</button>
                </div>
            </div>
        </form>
    </div>

  

    <div id="publicProjectModal" class="modal-publish-project">
        <div class="modal-pp-content">
            <div class="header-modal-pp">

                <h3>Publicar Proyecto</h3>
                <div class="close-modal-pp">
                    <a><i class="fas fa-times"></i></a>
                </div>
            </div>

            <form class="body-modal-pp" action="./proyecto" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-side-left">



                    <div class="titles-box-pp">
                        <h3>Titulo</h3>
                    </div>

                    <div class="box-texts">
                        <input type="text"  id ="nombre_proyecto"name="nombre_proyecto" required>
                    </div>

                    <div class="titles-box-pp">
                        <h3>Descripcion</h3>
                    </div>

                    <div class="box-texts">
                        <textarea type="text" id="descripcion_proyecto" name="descripcion" maxlength="200" required></textarea>
                    </div>

                    <div class="titles-box-pp">
                        <h3>Estado</h3>
                    </div>

                    <div class="box-select left">
                        <input type="range" id ="estado_proyecto"name="estado_proyecto" max="100" min="0" required>

                    </div>

                </div>

                <div class="modal-side-right">

                    <div class="titles-box-pp">
                        <h3>Adjuntar imagen</h3>
                    </div>

                    <div class="box-file">

                        <input type="file" name="imagen" id="" required>
                    </div>

                    <div class="titles-box-pp">
                        <h3>Finalidad</h3>
                    </div>

                    <div class="box-select right">
                        <select name="finalidad_proyecto" id="" >
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="btn-submit-pp">
                        <button id="bp" type="submit">Publicar</button>
                    </div>


                </div>
            </form>

        </div>
    </div>
   
@endsection

@section('sc')
<script type="text/javascript" src="{{ asset('js/acordion.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/modal-public-project.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modal-public-job.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('js/modal-public-product.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modalpublic.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>

    
    <script src="https://kit.fontawesome.com/f579ace1fb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    

    <script type="text/javascript" src="{{ asset('js/modal-login.js') }}"></script>

    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
            {
            $("#boton").click(function () {	 
                alert($('input:radio[name=tiempo_trabajo]:checked').val());
                $("#formulario").submit();
                });
             });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
            {
            $("#boton").click(function () {	 
                alert($('input:radio[name=tipo_empleo]:checked').val());
                $("#formulario").submit();
                });
             });
    </script>

<script type="text/javascript">
    $(document).ready(function()
        {
        $("#boton").click(function () {	 
            alert($('input:radio[name=recibirhv]:checked').val());
            $("#formulario").submit();
            });
         });
</script>


<script type="text/javascript">

    $(document).ready(function()
        {
        $("#boton").click(function () {	 
            alert($('input:radio[name=opc]:checked').val());
            $("#formulario").submit();
            });
         });


</script>


 
 
@endsection

