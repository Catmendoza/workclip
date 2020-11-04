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
                    <li class="">
                        <a href="{{url("/perfil")}}"><span class="fa fa-home mr-3"></span> Mi Perfil</a>
                    </li>
                    <li class="active">
                        <a href="{{route('perfil.edit',Auth::user()->id)}}"><span class="fa fa-user mr-3"></span> Datos personales</a>
                    </li>
                    <li>
                        @php
                            $aux=DB::table('habilidades')->where('id_perfil','=',Auth::user()->id)->count();
                            $aux2=DB::table('hobbys')->where('id_perfil','=',Auth::user()->id)->count();
                        @endphp
                        
                        @if ($aux==null)
                        <a href="{{url("/edit-habilidades")}}"><span class="fa fa-briefcase mr-3"></span>Mis habilidades</a>
                        
                        @endif

                        @if ($aux!=null)
                        <a href="{{route('edit-habilidades.edit',Auth::user()->id)}}"><span class="fa fa-briefcase mr-3"></span>Mis habilidades</a>

                        @endif
                    

                    </li>
                    <li>

                        @if ($aux2==null)
                        <a href="{{url("/edit-hobbys")}}"><span class="fa fa-briefcase mr-3"></span>Mis hobbys</a>
                        
                        @endif

                        @if ($aux2!=null)
                        <a href="{{route('edit-hobbys.edit',Auth::user()->id)}}"><span class="fa fa-briefcase mr-3"></span>Mis hobbys</a>

                        @endif
                        
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

        <div id="content" class="p-4 p-md-5 pt-5">
         
            @yield('content-sidebar')
        </div>
    </div>


 





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/edit-profile.js') }}"></script>



</body>

</html>
