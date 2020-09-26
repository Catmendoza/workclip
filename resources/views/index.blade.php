@extends('layout')

@section('content')
    <section class="about-us-section">
        <div class="container about-us">
            <div class="content-about-us">

                <div class="textos-about-us">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut necessitatibus minima voluptate nam
                        explicabo voluptatem quo, voluptas optio, molestiae modi eius, vero perspiciatis in repellendus!</p>

                </div>
                <div class="cont_imagen">
                    <img class="about-us-img" src=".\img\about-us.svg" alt="">
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
            <div class="content-select">

                <div class="box-index box-colaborators">
                    <div class="cont_titulo">
                        <h1>¿Buscas colaboradores<br>Para tus proyectos?</h1>
                    </div>
                    <div class="cont_imagen">
                        <img class="imgC" src=".\img\select-colaborators.svg" alt="">
                        <a href="" class="btn-selects">IR</a>
                    </div>
                </div>

                <div class="box-index box-projects">
                    <div class="cont_titulo">
                        <h1>¿Buscas proyectos?</h1>
                    </div>
                    <div class="cont_imagen">
                        <img class="imgC" src=".\img\select-projects.svg" alt="">
                        <a href="./main" class="btn-selects">IR</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="destacados-section">

        <svg class="divider destacados-top" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 960 90"
            style="enable-background:new 0 0 960 90;" xml:space="preserve">
            <style type="text/css">
                .st0 {
                    fill: #FFFFFF;
                }

            </style>
            <polygon class="st0" points="1118,-11.8 -158,-11.8 1117.8,101.8 " />
        </svg>

        <div class="container2 destacados">
            <div class="content-destacados">

                <div class="carrusel-index">



                    <div class="cont_destacados">
                        <div class="titulo">
                            <h1>Destacados</h1>
                        </div>
                    </div>

                    <div class="carrusel-index">
                        <div class="carrusel_container">
                            <div class="carrusel_items">
                                <img id="itemImg_1" class="carrusel_items-img" src=".\img\gio.png" alt="">
                                <div id="itemInfo_1" class="carrusel_items-info">
                                    <p class="attributes">Giovanni Jaramillo</p>
                                    <button class="button-carousel">Ver Mas</button>
                                </div>
                            </div>
                            <div class="carrusel_items">
                                <img class="carrusel_items-img" src=".\img\cata.png" alt="">
                                <div class="carrusel_items-info">
                                    <p class="attributes">Catalina Alvarez</p>
                                    <button class="button-carousel">Ver Mas</button>
                                </div>
                            </div>
                            <div class="carrusel_items">
                                <img class="carrusel_items-img" src=".\img\juan.png" alt="">
                                <div class="carrusel_items-info">
                                    <p class="attributes">Juan Villota</p>
                                    <button class="button-carousel">Ver mas</button>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
