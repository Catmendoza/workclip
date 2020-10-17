<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    @yield('css')

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&family=Roboto&display=swap" rel="stylesheet">
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
        <nav class="nav-bar-principal">

            <div class="container nav">

                <div class="logo">
                    <h1>WORKCLIP</h1>
                </div>
                @guest

                <div class="ohlasd">
                    <div class="tag">
                        
                    </div>
                </div>
                    <div class="container-btns-nav">
                        <div class="login-btn-nav">
                            <button id="btn-login">Iniciar Sesion</a>
                        </div>
                        @if (Route::has('register'))
                            <div class="register-btn-nav">
                                <a href="{{ url('/usuario/create') }}">Registrarme</a>
                            </div>
                        @endif
                    </div>

                    <div class="hamburguer">
                        <i class="fas fa-bars"></i>
                    </div>
                @else


                    <div class="container-btns-nav">
                        <div class="login-btn-nav">
                            <button id="btn-login"> {{ Auth::user()->nombre }} </a>
                        </div>

                        <div class="register-btn-nav">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        <div class="login-btn-nav">
                            <button id="btn-login"> {{ Auth::user()->rol == 1 ? 'Estudiante' : 'Empresario' }}</a>
                        </div>
                        @if (Auth::user()->rol == 1)

                        @else

                        @endif
                    </div>

                @endguest
                @php
                // $cantidad = DB::table('users')->count();
                // {{ $cantidad }} -- esto va afuera
                @endphp

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
        <form method="POST" action="{{ route('login') }}">
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
                    <p>¿No tienes cuenta?<a href="{{ url('/usuario/create') }}">¡Da click aqui!</a> </p>
                    <p>Registrate gratis en WorkClip</p>
                </div>

                <div class="inputs-modal-login">
                    <label>Email</label><input id="email" type="email"
                        class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label>Contraseña</label><input id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password" placeholder="Contraseña">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="button-modal-login">
                    <button type="submit">Iniciar Sesion</button>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="{{ asset('js/modal-login.js') }}"></script>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>
