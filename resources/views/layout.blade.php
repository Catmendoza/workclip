<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    @yield('css')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@600&display=swap"
        rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Roboto:wght@700;900&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    @section('css')

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    @endsection
    <title>WorkClip</title>
</head>

<body>
    <header>
        <nav class="nav-bar-principal">

            <div class="container nav">

                <div class="logo">
                    <a href="{{ url('/publicaciones') }}" style="line-height: 30px; ">WORK<span>CLIP</span></a>
                </div>
                @guest


                    <div class="container-btns-nav">
                        <div class="login-btn-nav">
                            <button id="btn-login">Iniciar sesion</a>
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
                <div class="container-profile-nav">
                    <div class="half">
                      <label for="profile2" class="profile-dropdown">
                        <input type="checkbox" id="profile2">
                        <div class="box-imgUser">
                            <img src="{{ asset(Auth::user()->imagen) }}">
        
                        </div>
               <span>{{ Auth::user()->nombre }}</span>
                        <label for="profile2"><i class="fas fa-bars"></i></label>
                        <ul>
                 
                          <li><a href="/perfil"><i class="fas fa-user"></i>Mi Perfil</a></li>
                          <li><a href="{{route('perfil.edit',Auth::user()->id)}}"><i class="fas fa-cog"></i>Configuracion</a></li>
                          <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Signout</a></li>

                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        class="d-none">
                        @csrf
                    </form>
                          
                        </ul>
                      </label>
                    </div>
                  </div>
   <!-- 
                    <div class="container-btns-nav">
                        <div class="nav-user-control">
                            <ul>
                                <li>
                                    <a href="#">
                                        <p>{{ Auth::user()->nombre }}<br>
                                            <span>{{ Auth::user()->rol == 1 ? 'Estudiante' : 'Empresario' }}</span>
                                        </p><i class="fas fa-angle-down"></i>
                                    </a>

                                    <div class="dropdown">
                                        <ul>
                                            <li><a href="/perfil"><i class="fas fa-user"></i> Profile</a></li>
                                            <li><a href="#"><i class="fas fa-sliders-h"></i> Settings</a></li>
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                    <i class="fas fa-sign-out-alt"></i> Signout</a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                        </ul>
                                    </div>

                                </li>
                            </ul>
                        </div>
 
                    <div class="wrapper">
                            <div class="navbar">

                                <div class="right">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <p>{{ Auth::user()->nombre }}<br>
                                                    <span>{{ Auth::user()->rol == 1 ? 'Estudiante' : 'Empresario' }}</span>
                                                </p><i class="fas fa-angle-down"></i>
                                            </a>

                                            <div class="dropdown">
                                                <ul>
                                                    <li><a href="/perfil"><i class="fas fa-user"></i> Profile</a></li>
                                                    <li><a href="#"><i class="fas fa-sliders-h"></i> Settings</a></li>
                                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                            <i class="fas fa-sign-out-alt"></i> Signout</a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                            class="d-none">
                                                            @csrf
                                                        </form>
                                                </ul>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

-->
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
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                        <a href="{{ url('/auth/redirect/google') }}" class="btn btn-primary"><i class="fa fa-google"></i> Google</a>
                        </div>
                        </div>
                </div>
            </div>
        </form>
    </div>
    
    <script src="{{ asset('js/index.js') }}"></script>

    @yield('sc')









</body>

</html>
