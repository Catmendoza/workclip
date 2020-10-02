@extends('layout')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cssindex.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal-public.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal-publish-job.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal-publish-project.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal-publish-product.css') }}" />

@endsection

@section('content')

    <section class="nav-bar-main">
        <div class="navbar navbar-expand-lg navbar-light  lighten-5  " style="background-color: white">

            <div class="container-nav-bar">
                <div class="form-nav-bar">
                    <form class="form-inline">
                        <div class="form-group has-search">
                            <i class="fa fa-search form-control-feedback"></i>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </div>

                <div class="buttons-nav-bar">
                    <button class="btn btn-lg">
                        <i class="fas fa-home"></i>
                        <h6>Inicio</h6>
                    </button>
                </div>

                <div class="buttons-nav-bar">
                    <button class="btn btn-lg">
                        <i class="fa fa-user-plus"></i>
                        <h6>Buscar perfil</h6>
                    </button>
                </div>

                <div class="buttons-nav-bar">
                    <button class="btn btn-lg" id="btn-public">
                        <i class="fa fa-plus-circle"></i>
                        <h6>Añadir publicación</h6>
                    </button>
                </div>
            </div>
        </div>

    </section>

    



          
    <section class="sect-content-post">
        <div class="container-grid-post">
    
            <div class="content-post-main">

            @foreach ($proyectos->reverse() as $proyecto)
                <div class="col-md-7">

                    <div class="header-box-main">
                        <div class="img-user-header">
                            <img src="{{ asset('img/cata.png') }}" alt="" class="rounded-circle float-left imgpeque">
                        </div>

                        @php

                         $aux = DB::table('users')->find($proyecto->id_perfil);
                         @endphp
                        <div class="name-user-box">
                            <h4 class="textWhite">{{$aux->nombre}}</h4>
                            <h6 class="textWhite">{{$aux->programa}}</h6>
                        </div>

                        <div class="fecha-box">
                            <label>11 Jul</label>
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
                            {{ $proyecto->descripcion }}


                            <div class="btn-read-more">
                                <button>Leer Mas</button>
                            </div>
                        </div>

                    </div>

                </div>

                @endforeach



  
  
              
</div>


            <div class="content-filter-post">
                              <!--Filtro-->
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
                                            <input type="checkbox">
                                            Emprendimiento
                                        </label>
            
                                    </div>
                                    <div class="checkbox" style="margin-left: 10px; line-height:10px; ">
            
                                        <label style="color:white;font-size:20px">
                                            <input type="checkbox">
                                            Proyectos
                                        </label>
                                    </div>
                                </div>
            
                            </div>
            </div>

        </div>

        

    </section>



    @php

   // {{$proyectos->links()}}
    @endphp

   

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
            <div class="select-modal-public">
                <div class="select-box">
                    <a id="btn-publicJob"><i class="fas fa-id-badge"></i></a>
                    <h4>Oferta de trabajo</h4>
                </div>
            </div>

        </div>


    </div>

    <div id="publicProduct" class="modal-publish-project">
        <div class="modal-pp-content">
            <div class="header-modal-pp">
                <h3>Publicar Producto</h3>
                <div class="close-public-product">
                    <a><i class="fas fa-times"></i></a>
                </div>
            </div>

            <div class="body-modal-pp">
                <div class="modal-side-left">

                    <div class="titles-box-pp">
                        <h3>Titulo</h3>
                    </div>

                    <div class="box-texts">
                        <input type="text" name="" id="">
                    </div>

                    <div class="titles-box-pp">
                        <h3>Descripcion</h3>
                    </div>

                    <div class="box-texts">
                        <textarea type="text" maxlength="200"></textarea>
                    </div>

                    <div class="titles-box-pp">
                        <h3>Estado</h3>
                    </div>

                    <div class="box-select left">
                        <input type="range" name="rango" max="100" min="0">

                    </div>

                </div>

                <div class="modal-side-right">

                    <div class="titles-box-pp">
                        <h3>Adjuntar imagen</h3>
                    </div>

                    <div class="box-file">

                        <input type="file" name="" id="">
                    </div>

                    <div class="titles-box-pp">
                        <h3>Finalidad</h3>
                    </div>

                    <div class="box-select right">
                        <select name="" id="">
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="btn-submit-pp">
                        <button type="submit">Publicar</button>
                    </div>


                </div>
            </div>

        </div>
    </div>



    <div id="publicJobModal" class="modal-publish-job">
        <div class="modal-pj-content">
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
                    <input type="text" name="" id="" />
                </div>

                <div class="radio-btns-pj">
                    <input type="radio" name="time-job" id="" />
                    <label>Remoto</label>
                    <input type="radio" name="time-job" id="" />
                    <label>Presencial</label>
                </div>

                <div class="radio-btns-pj">
                    <input type="radio" name="job-type" id="" />
                    <label>Tiempo completo</label>
                    <input type="radio" name="job-type" id="" />
                    <label>Medio tiempo</label>
                    <input type="radio" name="job-type" id="" />
                    <label>De preferencia</label>
                </div>

                <div class="box-select-pj">
                    <select name="" id="">
                        <option value="">Selecciona una opcion</option>
                        <option value="">1</option>
                    </select>
                </div>

                <div class="salary-box">
                    <div class="range-salary">
                        <h4>$</h4>
                        <div class="range one">
                            <input type="number" name="" placeholder=" ej: 700000" id="" />
                        </div>
                        <h4>a</h4>
                        <div class="range two">
                            <input type="number" placeholder=" 900000" name="" id="" />
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
                    <input type="radio" name="hv" id="" />
                    <label>Si</label>
                    <input type="radio" name="hv" id="" />
                    <label>No</label>
                </div>

                <div class="box-texts-pj" style="grid-column-start: 4; grid-row-start: 3">
                    <textarea type="text" maxlength="200"></textarea>
                </div>

                <div class="btn-submit-pj">
                    <button type="submit">Publicar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="publicProjectModal" class="modal-publish-project">
        <div class="modal-pp-content">
            <div class="header-modal-pp">

                <h3>Publicar Proyecto</h3>
                <div class="close-modal-pp">
                    <a><i class="fas fa-times"></i></a>
                </div>
            </div>

            <form class="body-modal-pp" action="/proyecto" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-side-left">



                    <div class="titles-box-pp">
                        <h3>Titulo</h3>
                    </div>

                    <div class="box-texts">
                        <input type="text" name="nombre_proyecto">
                    </div>

                    <div class="titles-box-pp">
                        <h3>Descripcion</h3>
                    </div>

                    <div class="box-texts">
                        <textarea type="text" name="descripcion" maxlength="200"></textarea>
                    </div>

                    <div class="titles-box-pp">
                        <h3>Estado</h3>
                    </div>

                    <div class="box-select left">
                        <input type="range" name="estado_proyecto" max="100" min="0">

                    </div>

                </div>

                <div class="modal-side-right">

                    <div class="titles-box-pp">
                        <h3>Adjuntar imagen</h3>
                    </div>

                    <div class="box-file">

                        <input type="file" name="imagen" id="">
                    </div>

                    <div class="titles-box-pp">
                        <h3>Finalidad</h3>
                    </div>

                    <div class="box-select right">
                        <select name="finalidad_proyecto" id="">
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="btn-submit-pp">
                        <button type="submit">Publicar</button>
                    </div>


                </div>
            </form>

        </div>
    </div>
    </section>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/f579ace1fb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
