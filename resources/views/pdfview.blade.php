<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/pdf.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        .btn-group-fab {
            position: fixed;
            width: 50px;
            height: auto;
            right: 20px;
            bottom: 20px;
        }

        .btn-group-fab .btn {
            position: absolute;
            bottom: 0;
            border-radius: 50%;
            display: block;
            margin-bottom: 4px;
            width: 40px;
            height: 40px;
            margin: 4px auto;
        }

        .btn-group-fab .btn-main {
            width: 50px;
            height: 50px;
            right: 50%;
            margin-right: -25px;
            z-index: 9;
        }

    </style>
</head>

<body>
    <div id="nav">
        <nav class="navbar navbar-light bg-light">
            <a class="btn btn-primary" type="button" href="{{ url('/perfil') }}">Regresar</a>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-2 mt-2 ">
                <img src="{{ $usuario->imagen }}" alt="" class='w-100 rounded-circle'>
            </div>

            <div class="col-10">
                <div class="text-center text-capitalize mt-5 titulo">{{ $usuario->nombre }}</div>
                <div class="subtitulo text-center">{{ $usuario->apellido }}</div>
                <div>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <div class="row text-center">
                            <div class="col font-weight-bold">Celular/Telefono</div>
                            <div class="col font-weight-bold">Email</div>
                            <div class="col font-weight-bold">Carrera</div>
                            <div class="w-100"></div>
                            <div class="col">{{ $usuario->contacto }}</div>
                            <div class="col">{{ $usuario->email }}</div>
                            <div class="col">{{ $usuario->programa }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 mx-5">
            <div class="col-2">
                <div class="text-center">
                    <div class="font-weight-bold textoTitulos">INTRO</div>
                    <div class="textoTitulos"><small>Sobre mi</small></div>
                </div>
            </div>
            <div class="col-10">
                <div class="texto">
                    {{ $usuario->texto_quiensoy }}
                </div>
            </div>

            <div class="w-100 mt-5"></div>

            <div class="col-2">
                <div class="font-weight-bold textoTitulos">Habilidades</div>
            </div>
            <div class="texto col-10">
                <div class="row text-center">

                    @foreach ($habilidad as $habilidades)

                        <div class="col">
                            <div class="box box1">
                                <h4>{{ $habilidades->titulo1 }}</h4>
                                <p>{{ $habilidades->principal_texto1 }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box box2">
                                <h4>{{ $habilidades->titulo2 }}</h4>
                                <p>{{ $habilidades->principal_texto2 }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box box3">
                                <h4>{{ $habilidades->titulo3 }}</h4>
                                <p>{{ $habilidades->principal_texto3 }}</p>
                            </div>
                        </div>

                    @endforeach

                </div>

            </div>
            <div class="btn-group-fab">
                <button type="button" class="btn btn-main btn-danger" id="holi" onclick="boton()"
                    title="Descargar hoja de vida">
                    <i class="material-icons">picture_as_pdf</i> </button>
            </div>
        </div>

        <script>
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })

            function boton() {
                let boton = document.getElementById("holi");
                let nav = document.getElementById("nav");

                boton.style.display = "none";
                nav.style.display = "none";

                window.print();

                boton.style.display = "block";
                nav.style.display = "block";
            }

        </script>

</body>

</html>
