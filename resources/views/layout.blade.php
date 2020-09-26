<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="{{ asset('css/cssindex.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal-public.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/user.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal-publish-job.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal-publish-project.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/modal-infoproj.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@600&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>WorkClip</title>
</head>

<body>
    <header>
        <nav>

            <div class="container nav">

                <div class="logo">
                    <h1>WORKCLIP</h1>
                </div>

                <div class="container-btns-nav">
                    <div class="login-btn-nav">
                        <button id="btn-login">Iniciar Sesion</a>
                    </div>

                    <div class="register-btn-nav">
                        <a href="{{ url('/usuario/create') }}">Registrarme</a>
                    </div>

                </div>

                <div class="hamburguer">
                    <i class="fas fa-bars"></i>
                </div>

            </div>
        </nav>

    </header>


    @yield('content')

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

    <div id="loginModal" class="modal-login">
        <form action="" method="post">
            @csrf
            <div class="modal-login-content">
                <div class="title-modal-login">
                    <div class="close-modal-index">
                        <a><i class="fas fa-times"></i></a>
                    </div>
                    <h1>WORKCLIP</h1>
                    <h2>USC</h2>
                </div>

                <div class="texts-modal-login">
                    <p>¿No tienes cuenta?<a href="">¡Da click aqui!</a> </p>
                    <p>Registrate gratis en WorkClip</p>
                </div>

                <div class="inputs-modal-login">
                    <label>Usuario</label><input name="nombre" placeholder="Nombre de usuario">
                    <label>Contraseña</label><input name="contrasenia" placeholder="Contraseña">
                </div>

                <div class="button-modal-login">
                    <button type="submit">Iniciar Sesion</button>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="{{ asset('js/modal.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modal2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modal3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modal4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modal5.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/f579ace1fb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>
