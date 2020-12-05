@extends('layout')


@section('css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link rel="shortcut icon" href="https://www.flaticon.es/svg/static/icons/svg/2905/2905064.svg">
<link rel="stylesheet" href="{{ asset('sass/cssindex.css') }}" />
<link rel="stylesheet" href="{{ asset('css/modal.css') }}" />
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />

<link rel="stylesheet" href="{{asset('css/searchprofile.css')}}">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
@endsection


@section('content')



<section class="nav-bar-main">
    <div class="navbar navbar-expand-lg navbar-light  lighten-5  " style="background-color: white">

        <div class="container-nav-bar">
            <div class="form-nav-bar">
                <form class="form-inline">
                    <div class="form-group has-search">
                        <i class="fa fa-search form-control-feedback"></i>
                        <input name ="search" type="text" class="form-control" placeholder="Buscar Perfil">
                    </div>
                </form>
            </div>

            @guest
                @if (Route::has('register'))
                        
               

            <div class="buttons-nav-bar">
                <a href="{{url("/publicaciones")}}" class="btn btn-lg">
                    <i class="fas fa-home"></i>
                
                </a>
            </div>

            <div class="buttons-nav-bar">
                <a class="active" href="{{url("/perfiles")}}" class="btn btn-lg">
                    <i class="fa fa-user-plus"></i>
          
                </a>
            </div>
            @endif

            @else
            <div class="buttons-nav-bar">
                <a href="{{url("/publicaciones")}}" class="btn btn-lg">
                    <i class="fas fa-home"></i>
               
                </a>
            </div>

            <div class="buttons-nav-bar">
                <a class="active" href="{{url("/perfiles")}}" class="btn btn-lg">
                    <i class="fa fa-user-plus"></i>
                 
                </a>
            </div>

            <div disabled class="buttons-nav-bar">
                <button disabled class="btn btn-lg" id="btn-public">
                    <i class="fa fa-plus-circle"></i>
                 
                </button>
            </div>


            @endguest
        </div>
    </div>

</section>

    <section class="profiles">



        
   
        <div class="container">

            <div class="bigbox-profiles">

                <div class="content-img-nofound">
                    @if ($search)
                    <h6>
                    <div class="alert alert-primary" role="alert">
                       Los resultados de tu busqueda '{{$search}}' son:
                      </div>
                    </h6>
                    @endif
                    @if ($usuarios->count()==0)
                    <img src="{{ asset('img/nofound.svg') }}" alt="">
                    <h1>Aun no hay usuarios</h1>
                   @endif

                </div>


            
                <div class="box-grid-cards">

                    @foreach($usuarios as $usuario)
                        
     
                   
                    <div class="card-profile-user">
                        <div class="content-card-grid">
                            <div class="first-row">

                            </div>
                            <div class="img-user">

                                <a href="{{route("perfil.show",$usuario->id)}}"><img src="{{$usuario->imagen}}" style="width: 100%; height: 100%; "></a>
                            </div>
                            <div class="name-user-label">
                                                        

                                <label>nombre</label>
                            </div>

                            <div class="program-user">
                                <label>Programa</label>
                            </div>
                            <div class="progress-university">
                                <label>Aptitudes</label>
                            </div>
              
                            <div class="habilidades-camp">
                                <label>Habilidades</label>
                            </div>
                            

                            <div class="links-user-card">

                                @guest
                                @if (Route::has('register'))
                          
                            
                                @endif
                            @else
                            @if (Auth::user()->rol==3)
                            <form action="{{route('perfil.destroy',$usuario->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>

                            </form>
                            @endif

                             @endguest
                            </div>

                            <div class="name-user-text">
                                <a href="{{route("perfil.show",$usuario->id)}}">{{$usuario->nombre}}</a>
                                <p>{{$usuario->texto_quiensoy}}</p>
                            </div>

                            <div class="program-user-data">
                                <label>{{$usuario->programa}}</label>
                            </div>

                            <div class="user-data-bar">
                                @foreach ($habilidad as $habilidades)
                                    @if ($habilidades->id_perfil == $usuario->id)
                                        <h6>{{$habilidades->aptitud1}}</h6>
                                        <h6>{{$habilidades->aptitud2}}</h6>
                                    @endif
                                @endforeach
                          
                            </div>
                    
                            <div class="habilidades-show">
                                @foreach ($habilidad as $habilidades)
                                    @if ($habilidades->id_perfil == $usuario->id)
                                        <h6>{{$habilidades->titulo1}}</h6>
                                        <h6>{{$habilidades->titulo2}}</h6>
                                        <h6>{{$habilidades->titulo3}}</h6>
                                    @endif
                                 @endforeach
                            </div>

                        </div>
                    </div>

                    @endforeach

                   

                   

                    <div class="pagination">
                        {{ $usuarios->links() }}
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection