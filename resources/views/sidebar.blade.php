<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1'>


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@600&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/edit-profile.css') }}" />
    <title>WorkClip</title>
</head>


<body>


    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1><a href="{{ url('/proyecto') }}" class="logo">WorkClip </a><span>Editar Perfil</span></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="./home.html"><span class="fa fa-home mr-3"></span> Mi Perfil</a>
                    </li>
                    <li>
                        <a href="#about"><span class="fa fa-user mr-3"></span> Datos personales</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-briefcase mr-3"></span> Mis Habilidades</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-sticky-note mr-3"></span> Mis Hobbys</a>
                    </li>

                </ul>

                <div class="footer">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        WorkClip Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
    
                        </script> <br> All rights reserved | This template is made with <i class="icon-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>

        </nav>

        <!-- Page Content  -->
        @yield('content-sidebar')
        <div id="content" class="p-4 p-md-5 pt-5">
        
        </div>
    </div>


 

    <div id="EditProfileModal" class="modal-editProfile">

        <form class="modal-editp-content" action="{{ route('perfil.update', $datos->id) }}" method="POST"
            enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="header-modal-editp">

                <label>WORKCLIP</label>

            </div>

            <div class="body-editp-grid">

                <div class="boxgray update-profile">
                    <div class="grid-content-update">
                        <div class="img-update-user">


                            <div class="image-user-form" action="" method="post" enctype="multipart/form-data">
                                <input id="avatar-2" name="imagen" type="file">
                                <img src="{{ asset($datos->imagen) }}">
                            </div>

                        </div>
                        <div class="data-info-user-profile">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" value="{{ $datos->nombre }}">
                            <input class="state" type="text" spellcheck="false" value="Hi! this is my state">
                        </div>

                    </div>
                </div>
                <div class="boxgray who-im">
                    <label for="">Quien eres</label>
                    <textarea id="description-who-im" style="resize: none;"
                        name="texto_quiensoy">{{ $datos->texto_quiensoy }}</textarea>
                </div>
                <div class="boxgray social-networks-user">
                    <div class="icons-social">
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-github"></i>
                    </div>
                    <div class="inputs-social">
                        <input type="text" name="instagram" value="{{ $datos->instagram }}" id="">

                        <input type="text" name="facebook" value="{{ $datos->facebook }}" id="">

                        <input type="text" name="git" value="{{ $datos->git }}" id="">
                    </div>

                    <input type="hidden" name="apellido" value="{{ $datos->apellido }}">
                    <input type="hidden" name="cedula" value="{{ $datos->cedula }}">
                    <input type="hidden" name="contacto" value="{{ $datos->contacto }}">
                    <input type="hidden" name="programa" value="{{ $datos->programa }}">
                    <input type="hidden" name="rol" value="{{ $datos->rol }}">
                    <input type="hidden" name="nombre_empresa" value="{{ $datos->nombre_empresa }}">



                </div>
            </div>

            <div class="footer-modal-editp">
                <div class="button-modal-profile">
                    <a class="btn btn-danger" href="/perfil">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>



        </form>


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/edit-profile.js') }}"></script>



</body>

</html>
