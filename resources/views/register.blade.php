<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('sass/cssindex.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" />

    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

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



    <div style="height: 150px; overflow: hidden; min-width: 400px;"><svg class="wave-top" viewBox="0 0 500 150"
            preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 271.49,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z"
                style="stroke: none; fill: #1a2243;"></path>
        </svg></div>

    <section class="logo-sect">
        <div class="container-logo">
            <label>WORK</label><br>
            <label style="margin-left: 150px;">CLIP</label>
            <label style="font-size: 2rem ; color:#2a3369;">USC</label>

        </div>

    </section>
    <div style="height: 150px; overflow: hidden; min-width: 400px;"><svg class="wave-top" viewBox="0 0 500 150"
            preserveAspectRatio="none" style="height: 100%; width: 100%; background:#fff">
            <path d="M-3.10,89.30 C175.22,191.94 316.31,6.42 506.49,110.03 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill:#212954;"></path>
        </svg></div>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <section class="register-sect">
            <div class="box-register" style="background-color:#212954;">
                <div class="content-register">
                    <div class="titles" style="text-align: center; color: white; margin-bottom: 40px;">
                        <h4 style="color: #fff; margin-top: 10px; font-size: 2rem;  font-weight: bold;">Registrate</h4>

                    </div>

                    <div class="input-group mb-3" style="width: 65%; margin: 0 auto;">
                        <div class="input-group-prepend" style="width: 30%;min-width: 100px;">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%;min-width: 100px; display: flex;justify-content: center;align-items: center;">Nombres</span>
                        </div>
                        <input name="nombre" value="{{ old('nombre') }}" type="text"
                            class="form-control @error('nombre') is-invalid @enderror" id="nombre"
                            aria-describedby="basic-addon3" style="width: 50%; margin-left:0" required
                            autocomplete="nombre" autofocus />
                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3" style="width: 65%; margin: 0 auto;">
                        <div class="input-group-prepend" style="width: 30%;min-width: 100px;">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%;min-width: 100px; display: flex;justify-content: center;align-items: center;">Apellidos</span>
                        </div>
                        <input name="apellido" type=" text" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" />
                    </div>
                    <div class="input-group mb-3" style="width: 65%; margin: 0 auto;">
                        <div class="input-group-prepend" style="width: 30%;min-width: 100px;">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%;min-width: 100px; display: flex;justify-content: center;align-items: center;">Cedula</span>
                        </div>
                        <input name="cedula" type="number" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" />
                    </div>
                    <div class="input-group mb-3" style="width: 65%; margin: 0 auto;">
                        <div class="input-group-prepend" style="width: 30%;min-width: 100px;">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%;min-width: 100px; display: flex;justify-content: center;align-items: center;">Email</span>
                        </div>
                        <input id="email" name="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            required autocomplete="email" aria-describedby="basic-addon3" />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3" style="width: 65%; margin: 0 auto;">
                        <div class="input-group-prepend" style="width: 30%;min-width: 100px;">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%;min-width: 100px; display: flex;justify-content: center;align-items: center;">Tel/Cel</span>
                        </div>
                        <input name="contacto" type=" number" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" />
                    </div>
                    <div class="input-group mb-3" style="width: 65%; margin: 0 auto;">
                        <div class="input-group-prepend" style="width: 30%;min-width: 100px;">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%;min-width: 100px; display: flex;justify-content: center;align-items: center;">Programa</span>
                        </div>
                        <input name="programa" type=" text" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" />
                    </div>



                </div>
            </div>
            <div class="box-register" style="background-color: #1c2347;">

                <div class="content-register">
                    <div class="titles" style="text-align: center; color: white; ">
                        <h1 style="font-weight: normal !important;">¡Comienza ya a publicar!</h1>
                        <h2 style="font-weight: normal !important;">Crea cuenta gratias ahora.</h2>
                        <h1 style="color: #ffdb56">¡Elige tu rol en la página!</h1>
                    </div>
                    <div class="option-rols">
                     
                        <input class="btn btn-default btn-circle btn-xl"  value="1"name="rol" type="radio"
                            style="background-color: white">

                        

                        <input class="btn btn-default btn-circle btn-xl"  value="0"type="radio"  name="rol"style="background-color: white">


                    </div>
                    <div class="text-rols">
                        <label style="color:white">Estudiante</label>
                        <label style="color:white">Accionista</label>
                    </div>
                </div>

            </div>

        </section>

        <section class="register-sect">
            <div class="box-register" style="background-color: #1c2347;">

                <div class="content-register">
                    <div class="titles" style="text-align: center; color: white; padding-top: 50px">
                        <h1>Debes de usar un correo</h1>
                        <h1>válido para la</h1>
                        <h1>confirmación</h1>
                    </div>
                </div>

            </div>
            <div class="box-register" style="background-color: #212954;">

                <div class="content-register">
                    <div class="input-group mb-3" style="width: 65%; margin: 0 auto;">
                        <div class="input-group-prepend" style="width: 30%;min-width: 120px;">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%;min-width: 120px; display: flex;justify-content: center;align-items: center;">Usuario</span>
                        </div>
                        <input name="usuario" type=" text" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" style="height: 30px; margin-top: 2.5px" />
                    </div>
                    <div class="input-group mb-3" style="width: 65%; margin: 0 auto;">
                        <div class="input-group-prepend" style="width: 30%;min-width: 120px;">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%;min-width: 120px; display: flex;justify-content: center;align-items: center;">Contraseña</span>
                        </div>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" required autocomplete="new-password"
                            aria-describedby="basic-addon3" style="height: 30px; margin-top: 2.5px" />
                    </div>
                    <div class="input-group mb-3" style="width: 65%; margin: 0 auto;">
                        <div class="input-group-prepend" style="width: 30%;min-width: 120px;">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%;min-width: 120px; display: flex;justify-content: center;align-items: center;">Confirmar</span>
                        </div>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror"
                            id="password-confirm" aria-describedby="basic-addon3"
                            style="height: 30px; margin-top: 2.5px" name="password_confirmation" required
                            autocomplete="new-password" />
                    </div>
                    <div class="input-group mb-3" style="width: 65%; margin: 0 auto;">
                        <div class="input-group-prepend" style="width: 30%;min-width: 120px;">
                            <span class="input-group-text" id="basic-addon3"
                                style="background-color: #1a2243; color: white; width: 100%;min-width: 120px; display: flex;justify-content: center;align-items: center; ">Edad</span>
                        </div>
                        <input name="edad" type="number" min="0" max="100" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" style="height: 30px; margin-top: 2.5px" />
                    </div>
                    
        <input type="hidden"value="/imagenes_usuarios/usuario.png"name="imagen">
        <input type="hidden"value="Aqui debes poner  tu descripcion" name="texto_quiensoy">
        <input type="hidden"value="Nombre de empresa" name="nombre_empresa">
        <input type="hidden"value="#"name="instagram">
        <input type="hidden"value="#" name="facebook">
        <input type="hidden"value="#" name="git">
                    <div class="btn-register-submit" style="padding-top: 100px;">
                        <input class="btn btn-primary" type="submit" value="Registrarme" />
                    </div>
        
                    <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                    <a href="{{ url('/auth/redirect/google') }}" class="btn btn-primary"><i class="fa fa-google"></i> Google</a>
                    </div>
                    </div>
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


    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
            {
            $("#boton").click(function () {	 
                alert($('input:radio[name=rol]:checked').val());
                $("#formulario").submit();
                });
             });
    </script>
</body>

</html>
