@extends('layout')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cssindex.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/user.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal-infoproj.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/edit-profile.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection


@section('content')
    <div class="data-section">

        <section class="personal contenedor">
            <div class="container-grid-profile">
                <div class="card-portada">
                    <div class="img-box-user">
                        <img src="{{ asset($usuario->imagen) }}" alt="">
                    </div>
                    <div class="texts-box-portada">
                        <label>¿Quien Soy?</label>
                        <p>{{ $usuario->texto_quiensoy }}</p>
                    </div>
                    <div class="social-media-port">
                        <a href="{{ $usuario->instagram }}"><i class="fab fa-instagram"></i></a>
                        <a href="{{ $usuario->facebook }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ $usuario->github }}"><i class="fab fa-github"></i></a>
                    </div>
                </div>

                <div class="data-info-user">


                    <div class="content-margin-profile">
                        <div class="header-titles-profile">
                            <label>{{ $usuario->nombre }}</label>
                            @php
                            $aux;

                            if ($usuario->rol == 0){
                            $aux="Empresario";
                            }else{
                            $aux="Estudiante";
                            }
                            @endphp
                            <p>{{ $aux }}</p>
                            <hr>
                        </div>
                        <div class="container-data-profile">
                            <label style="font-weight: bold">Carrera</label>
                            <label style="grid-row-start: 2; font-weight: bold">Cel</label>
                            <label style="grid-row-start: 3; font-weight: bold;">Email</label>
                            <label style="grid-row-start: 4; font-weight: bold">Edad</label>


                            <label>{{ $usuario->programa }}</label>
                            <label>{{ $usuario->contacto }}</label>
                            <label>{{ $usuario->email }}</label>
                            <label>{{ $usuario->edad }}</label>

                        </div>
                        <div class="footer-profile">
                            <button class="btn-footer contact">Contacta me</button>
                            <button class="btn-footer cv">Descargar CV</button>


                        </div>
                    </div>





                </div>

            </div>



            <div class="contenido-data">
                <div class="container-grid-more">
                    <div class="content-more-data">
                        <div class="title-more-data">
                            <label for="">MÁS SOBRE MI</label>
                        </div>
                        <div class="nav-tabs-container">
                            <div class="tab-header">

                                <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
                                    <li class="tab tabs-li"><a href="#tab1">Sueño</a></li>
                                    <li class="tab tabs-li"><a class="active" href="#tab2">Actitud</a></li>
                                    <li class="tab tabs-li"><a href="#tab3">Meta</a></li>
                                </ul>

                            </div>

                            <div class="tab-body">
                                <div class="tab-box" id="tab1">
                                    <i class="fas fa-rocket"></i>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde eum error saepe iure
                                        quasi exercitationem nostrum, explicabo eaque qui doloremque doloribus mollitia
                                        iusto maiores ducimus.</p>
                                </div>
                                <div class="tab-box" id="tab2">
                                    <i class="fas fa-bolt"></i>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, cumque! Asperiores
                                        autem, laboriosam harum atque fugit veniam aut, vel quos ducimus, aspernatur eveniet
                                        quo sed!</p>
                                </div>
                                <div class="tab-box" id="tab3">
                                    <i class="fas fa-meteor center-align"></i>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione iusto maxime
                                        deserunt minus incidunt soluta reiciendis, recusandae, fuga sit fugit necessitatibus
                                        iste quasi, accusantium facere.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-portada-more">

                        <div class="box-container-img">
                            <div class="img-box-more">
                                <img src="{{ asset($usuario->imagen) }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <svg class="divider datas-bottom" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1366 112"
            style="enable-background:new 0 0 1366 112;" xml:space="preserve">
            <style type="text/css">
                .st0 {
                    fill: #1c2347;
                }

            </style>
            <polygon class="st0" points="-352,-12 -352,155 1959,155 " />
        </svg>
    </div>

    <section class="projects-section">
        <div class="contenedor2 projects">
            <div class="content-projects">


                <h2>Proyectos Productos</h2>


                <div class="slider-projects">

                    <div class="carrusel">

                        <div class="carrusel">
                            <div class="carrusel_container">

                                @foreach ($proyectos as $proyecto)




                                    <div class="carrusel_itemsInline">

                                        <div class="carrusel_itemsFlex">

                                            <div class="carrusel_cont_items-img">
                                                <img class="carrusel_items-img" src="{{ asset($proyecto->imagen) }}" alt="">
                                            </div>

                                            <div class="carrusel_item-content">
                                                <div class="title-projects">
                                                    <h1>{{ $proyecto->nombre_proyecto }}</h1>
                                                </div>

                                                <div class="text-projects">

                                                    <p>{{ $proyecto->descripcion }}</p>

                                                </div>

                                                <div class="bottom-projects">
                                                    <a id="btn1">Leer más</a>
                                                </div>


                                            </div>


                                        </div>
                                    </div>








                                @endforeach

                                @if ($proyectos->count() == 0)
                                    <div class="carrusel_itemsInline">

                                        <div class="carrusel_itemsFlex">

                                            <div class="carrusel_cont_items-img">
                                                <img class="carrusel_items-img" src="\img\x.jpg" alt="">
                                            </div>

                                            <div class="carrusel_item-content">
                                                <div class="title-projects">
                                                    <h1>No hay proyectos</h1>
                                                </div>

                                                <div class="text-projects">

                                                    <p>¿Que esperas para publicar?</p>

                                                </div>




                                            </div>


                                        </div>
                                    </div>
                                @endif




                            </div>

                        </div>

                    </div>


                </div>


            </div>
        </div>
    </section>


    <section class="hobbys-section">

        <svg class="divider hobbys-top" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1366 112"
            style="enable-background:new 0 0 1366 112;" xml:space="preserve">
            <style type="text/css">
                .st0 {
                    fill: #1c2347;
                }

            </style>
            <polygon class="st0" points="-107.9,-7.3 1570.1,-7.3 -107.9,120 " />
        </svg>


        <div class="contenedor2 hobbys">
            <div class="content-hobbys">
                <div class="titulo-hobbys">
                    <h1>HOBBYS </h1>


                </div>

                <div class="box-cards-hobbys">
                    <div class="contenedor_tarjeta">
                        <a>
                            <figure id="tarjeta">
                                <img src=".\img\mascaras.svg" class="frontal" alt="">
                                <figcaption class="trasera">
                                    <h2 class="titulo">Cultura</h2>
                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cupiditate voluptates
                                        ipsum suscipit, aspernatur eum, amet nemo architecto nihil corrupti.</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="contenedor_tarjeta">
                        <a>
                            <figure id="tarjeta">
                                <img src=".\img\comer.svg" class="frontal" alt="">
                                <figcaption class="trasera">
                                    <h2 class="titulo">Comida</h2>
                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cupiditate voluptates
                                        ipsum suscipit, aspernatur eum, amet nemo architecto nihil corrupti.</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="contenedor_tarjeta">
                        <a>
                            <figure id="tarjeta">
                                <img src=".\img\nadar.svg" class="frontal" alt="">
                                <figcaption class="trasera">
                                    <h2 class="titulo">Deporte</h2>
                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis cupiditate voluptates
                                        ipsum suscipit, aspernatur eum, amet nemo architecto nihil corrupti.</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="habilities-section">
        <div class="contenedor2 habilities">
            <div class="content-habilities">

                <div class="textos-habilities">
                    <h1>Habilidades</h1>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A magni, tempora sed quae libero
                            doloribus. Sapiente esse voluptate amet architecto.</p>
                    </div>

                </div>

                <div class="cards-habilities">

                    <div class="box box1">
                        <h4>Diseño HTML</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, eveniet?</p>
                    </div>
                    <div class="box box2">
                        <h4>React JS</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, eveniet?</p>
                    </div>
                    <div class="box box3">
                        <h4>Angular</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, eveniet?</p>
                    </div>




                </div>
            </div>
        </div>
    </section>

    <div id="proyect-Modal" class="modal-infoproj">

        <div class="modal-info-content">

            <div class="header-modal-info">
                <div class="close">
                    <label>x</label>
                </div>
                <h3>Proyecto Name</h3>
                <hr>
            </div>

            <div class="body-modal-info">
                <div class="img-project">
                    <img src=".\img\descarga.png">
                </div>
                <div class="descript-project">
                    <h3>Descripcion del proyecto</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem soluta eos rerum, aliquam quia ipsum
                        voluptates nulla laboriosam corrupti non minus facilis dolorem culpa at illum alias doloremque
                        deleniti nisi.</p>
                    <div class="social-media-project">
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-github"></i>
                    </div>
                </div>

            </div>

            <div class="footer-modal-info">

                <div class="progress-bar-modal">
                    <p>Estado del <br>proyecto</p>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 50%;">50%</div>
                    </div><br>
                </div>

                <div class="buttons-modal-info">
                    <a href="#">Seguir</a>
                    <a href="#">Me interesa</a>
                    <a href="#">Postularme</a>
                </div>

            </div>

        </div>

    </div>




@endsection

@section('sc')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modal-login.js') }}">
    </script>

@endsection
