<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/pdf.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

</head>

<body>
    <div class="container">
        <button id="holi" onclick="boton()">Imprimir</button>

        <div class="row">
            <div class="col-2">
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
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type
                    and
                    scrambled it to make a type specimen book.
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-2 mt-5">
                <div class="font-weight-bold textoTitulos">Habilidades</div>
            </div>
            <div class="texto col-10">
                <div class="row">
                    <div>
                        <span>
                            @foreach ($habilidad as $habilidades)


                                <div class="box box1">
                                    <h4>{{ $habilidades->titulo1 }}</h4>
                                    <p>{{ $habilidades->principal_texto1 }}</p>
                                </div>
                                <div class="box box2">
                                    <h4>{{ $habilidades->titulo2 }}</h4>
                                    <p>{{ $habilidades->principal_texto2 }}</p>
                                </div>
                                <div class="box box3">
                                    <h4>{{ $habilidades->titulo3 }}</h4>
                                    <p>{{ $habilidades->principal_texto3 }}</p>
                                </div>

                            @endforeach
                        </span>
                    </div>
                    <div>
                        <span></span>

                    </div>
                    <div>
                        <span></span>

                    </div>

                </div>

            </div>
        </div>

        <script>
            function boton() {
                let boton = document.getElementById("holi");

                boton.style.display = "none";

                window.print();

                boton.style.display = "block";
            }

        </script>

</body>

</html>
