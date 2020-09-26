<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css/cssindex.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@600&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/f579ace1fb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>WorkClip</title>
</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/usuario">
        @csrf
        <section>
            <div class="flex-container">

                <div>
                    <h4 style="color: #1a2243; margin-top: 10px">Registrate</h4>
                    <h3 style="color: #ffdb56"><b>Estudiante-Empresario</b></h3>
                    <div class="input-group mb-3" style="width: 50%; margin-left: auto; margin-right: auto">
                        <div class="input-group-prepend" style="width: 30%">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%">Nombres</span>
                        </div>
                        <input name="nombre" type="text" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" />
                    </div>
                    <div class="input-group mb-3" style="width: 50%; margin-left: auto; margin-right: auto">
                        <div class="input-group-prepend" style="width: 30%">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%">Apellidos</span>
                        </div>
                        <input name="apellidos" type=" text" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" />
                    </div>
                    <div class="input-group mb-3" style="width: 50%; margin-left: auto; margin-right: auto">
                        <div class="input-group-prepend" style="width: 30%">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%">Cedula</span>
                        </div>
                        <input name="cedula" type=" number" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" />
                    </div>
                    <div class="input-group mb-3" style="width: 50%; margin-left: auto; margin-right: auto">
                        <div class="input-group-prepend" style="width: 30%">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%">Email</span>
                        </div>
                        <input name="email" type="email" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" />
                    </div>
                    <div class="input-group mb-3" style="width: 50%; margin-left: auto; margin-right: auto">
                        <div class="input-group-prepend" style="width: 30%">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%">Tel/Cel</span>
                        </div>
                        <input name="tel" type=" number" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" />
                    </div>
                    <div class="input-group mb-3" style="
                    width: 50%;
                    margin-left: auto;
                    margin-right: auto;
                    padding-bottom: 50px;
                    ">
                        <div class="input-group-prepend" style="width: 30%">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%">Programa</span>
                        </div>
                        <input name="programa" type=" text" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" />
                    </div>
                </div>
                <div style="background-color: #1a2243">
                    <div style="text-align: center; color: white; padding-top: 50px">
                        <h1>¡Comienza ya a publicar!</h1>
                        <h2>Crea cuenta gratias ahora.</h2>
                        <h1 style="color: #ffdb56">¡Elige tu rol en la página!</h1>
                    </div>
                    <div class="option-rols">
                        <input class="btn btn-default btn-circle btn-xl" name="roles" type="radio"
                            style="background-color: white">
                        <i class="fa fa-user"></i>

                        <input class="btn btn-default btn-circle btn-xl" type="radio" name="roles"
                            style="background-color: white">
                        <i class="fas fa-user-tie"></i>

                    </div>
                </div>
            </div>
            <div class="flex-container">
                <div style="
            background-color: #1a2243;
            text-align: center;
            color: white;
            padding-top: 50px;
          ">
                    <h1>Debes de usar un correo</h1>
                    <h1>válido para la</h1>
                    <h1>confirmación</h1>
                </div>
                <div>
                    <div class="input-group mb-3" style="
              width: 50%;
              margin-left: auto;
              margin-right: auto;
              margin-top: 50px;
            ">
                        <div class="input-group-prepend" style="width: 35%">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%">Usuario</span>
                        </div>
                        <input name="usuario" type=" text" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" style="height: 30px; margin-top: 2.5px" />
                    </div>
                    <div class="input-group mb-3" style="width: 50%; margin-left: auto; margin-right: auto">
                        <div class="input-group-prepend" style="width: 35%">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%">Contraseña</span>
                        </div>
                        <input name="contrasenia" type="password" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" style="height: 30px; margin-top: 2.5px" />
                    </div>
                    <div class="input-group mb-3" style="width: 50%; margin-left: auto; margin-right: auto">
                        <div class="input-group-prepend" style="width: 35%">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%">Confirmar</span>
                        </div>
                        <input name="contrasenia_confirmation" type="password" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" style="height: 30px; margin-top: 2.5px" />
                    </div>
                    <div class="input-group mb-3" style="width: 50%; margin-left: auto; margin-right: auto">
                        <div class="input-group-prepend" style="width: 35%">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%">Edad</span>
                        </div>
                        <input name="edad" type="number" min="0" max="100" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" style="height: 30px; margin-top: 2.5px" />
                    </div>
                    <div style="padding-bottom: 50px; margin-right: 20px">
                        <input class="btn btn-primary float-right" type="submit" value="Registrarme" />
                    </div>
                </div>
            </div>
        </section>
    </form>
    <footer class="footerWC">
        <div class="footsects">
            <h1>WORKCLIP</h1>
            <h2>USC</h2>
        </div>
        <div class="footsects">
            <a href="#">Cali, Colombia</a>
            <a href="#">+57 3158645554</a>
            <a href="#">¿Quienes Somos?</a>
            <a href="#">Contactanos</a>
        </div>
        <div class="footsects">
            <div class="social-media-footer">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-github"></i>
            </div>
        </div>
    </footer>
</body>

</html>
