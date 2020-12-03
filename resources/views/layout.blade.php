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
                            <button type="button" class="google-button">
                                <span class="google-button__icon">
                                  <svg viewBox="0 0 366 372" xmlns="http://www.w3.org/2000/svg"><path d="M125.9 10.2c40.2-13.9 85.3-13.6 125.3 1.1 22.2 8.2 42.5 21 59.9 37.1-5.8 6.3-12.1 12.2-18.1 18.3l-34.2 34.2c-11.3-10.8-25.1-19-40.1-23.6-17.6-5.3-36.6-6.1-54.6-2.2-21 4.5-40.5 15.5-55.6 30.9-12.2 12.3-21.4 27.5-27 43.9-20.3-15.8-40.6-31.5-61-47.3 21.5-43 60.1-76.9 105.4-92.4z" id="Shape" fill="#EA4335"/><path d="M20.6 102.4c20.3 15.8 40.6 31.5 61 47.3-8 23.3-8 49.2 0 72.4-20.3 15.8-40.6 31.6-60.9 47.3C1.9 232.7-3.8 189.6 4.4 149.2c3.3-16.2 8.7-32 16.2-46.8z" id="Shape" fill="#FBBC05"/><path d="M361.7 151.1c5.8 32.7 4.5 66.8-4.7 98.8-8.5 29.3-24.6 56.5-47.1 77.2l-59.1-45.9c19.5-13.1 33.3-34.3 37.2-57.5H186.6c.1-24.2.1-48.4.1-72.6h175z" id="Shape" fill="#4285F4"/><path d="M81.4 222.2c7.8 22.9 22.8 43.2 42.6 57.1 12.4 8.7 26.6 14.9 41.4 17.9 14.6 3 29.7 2.6 44.4.1 14.6-2.6 28.7-7.9 41-16.2l59.1 45.9c-21.3 19.7-48 33.1-76.2 39.6-31.2 7.1-64.2 7.3-95.2-1-24.6-6.5-47.7-18.2-67.6-34.1-20.9-16.6-38.3-38-50.4-62 20.3-15.7 40.6-31.5 60.9-47.3z" fill="#34A853"/></svg>
                                </span>
                                <span class="google-button__text"><a href="{{ url('/auth/redirect/google') }}">Entrar con Google</a></span>
                              </button>     
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
