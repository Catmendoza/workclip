@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('sass/cssindex.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@endsection

@section('content')
    <section class="about-us-section">
        <div class="container2 about-us">
            <div class="content-about-us">

                <div class="textos-about-us">
                    <h3>Encuentra tu <span>trabajo</span> adecuado</h3>
                    <br>
                    <p>Busca y encuentra oportunidad de trabajo fácil y rápido entre estudiantes y reclutadores expertos.
                    </p>
               <a href="{{ url('/usuario/create') }}"> <button type="button" class="btn btn-primary btn-lg btnport">Comienza</button></a>
                </div>
                <div class="cont_imagenport">
                    <img src="../img/imgPortada3.svg" alt="">
                </div>

            </div>
        </div>


        <svg class="divider divider-about-us" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1366 112"
            style="enable-background:new 0 0 1366 112;" xml:space="preserve">
            <style type="text/css">
                .st0 {
                    fill: #FFFFFF;
                }

            </style>
            <polygon class="st0" points="-352,-24 -352,155 1959,155 " />
        </svg>


    </section>

    <section class="select-section">
        <div class="container2 select">
            <div class="header-select">
                <h1>¿Qué necesitas?</h1>
            </div>
            <div class="content-select">

                <div class="card-select">
                    <div class="cardsl-header">
                        <img src="../img/card1.svg" alt="">
                    </div>
                    <div class="cardsl-body">
                        <h4>Buscar personal para mi proyecto</h4>
                        <p>Busca entre estudiantes y reclutadores 
                            personal para tus proyectos 
                            y negocios de forma fácil y rápida.</p>
                    </div>
                    <div class="cardsl-footer">
                       <a href="{{url('/publicaciones')}}"> <button type="button" class="btn btn-primary btn-lg">Buscar</button></a>
                    </div>
                </div>

                <div class="card-select">
                    <div class="cardsl-header">
                        <img src="../img/card2.svg" alt="" >
                    </div>
                    <div class="cardsl-body">
                        <h4>Encuentra proyectos interesantes</h4>
                        <p>Busca por medio de WorkClip 
                            interesantes proyectos en los que 
                            comentar y seguir.</p>
                    </div>
                    <div class="cardsl-footer">
                       <a href="{{url('/perfiles')}}"> <button type="button" class="btn btn-primary btn-lg">Encontrar</button> </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="about-section">

        <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.28,-0.48 C162.24,53.78 325.90,56.73 500.27,0.50 L499.15,0.50 L-0.27,-4.44 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
        <div class="container2 about">
            <div class="content-about">

                <div class="container-image-about">
                    <img src="../img/about-us-team.svg" alt="" srcset="">
                </div>
                <div class="text-sobre">
                    <h1>Sobre nosotros</h1>
                    <p>Somos un grupo de estudiantes de la 
                        Universidad Santiago de Cali, hemos 
                        realizado este proyecto para la 
                        materia Programación Web 2020B</p>
                </div>
                
            </div>
        </div>
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-3.10,151.47 C144.74,75.48 356.37,77.45 506.49,151.47 L500.00,150.00 L-3.10,151.47 Z" style="stroke: none; fill: #1c2347;"></path></svg></div>
    </section>
@endsection


@section('sc')
    <script type="text/javascript" src="{{ asset('js/modal-login.js') }}"></script>
@endsection
