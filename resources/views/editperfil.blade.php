@extends('sidebar')

<link rel="stylesheet" href="{{ asset('css/edit-profile.css') }}" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css"
    integrity="sha512-zxBiDORGDEAYDdKLuYU9X/JaJo/DPzE42UubfBw9yg8Qvb2YRRIQ8v4KsGHOx2H1/+sdSXyXxLXv5r7tHc9ygg=="
    crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
@section('content-sidebar')

    <form class="" action="{{ route('perfil.update', $datos->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <label for="" class="name-page" style="text-align: center">MI PERFIL</label>
        <div class="grid-profile">

            <div class="user-data">

                <div class="content-imgbox">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" value="" name="imagen" accept=".png, .jpg, .jpeg" />
                            <label type="button" id="browseImg" class="btn btn-primary" for="imageUpload"><i
                                    class="fas fa-pencil-alt"></i></label>
                        </div>
                        <div class="avatar-preview" id="UserImgBox"
                            style="background-image: url({{ asset($datos->imagen) }})">
                        </div>
                    </div>

                </div>
                <div class="inputs-user">
                    <label class="lb1" for="" class="username">Giovanni Jaramillo</label>
                    <label class="lb2" for="" class="iduser">@GiovaniJ</label>

                    <button type="button" id="DeleteImgBtn" class="btn btn-danger">Eliminar</button>
                </div>


            </div>

            <div class="datos-user" style="justify-content: flex-end">
                <div class="box-grid-datos">
                    <div class="box-content-data">
                        <label for="">
                            <h6>Correo electronico</h6>Giovani@Jajaj.com
                        </label>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditEmailModal">Editar</button>
                    </div>
                    <div class="box-content-data">
                        <label for="">
                            <h6>Carrera</h6>Ingenieria Sistemas
                        </label>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditCarrierModal">Editar</button>

                    </div>
                    <div class="box-content-data">
                        <label for="">
                            <h6>Celular</h6>+57 315655999
                        </label>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditCelModal">Editar</button>

                    </div>

                </div>
            </div>
            <div class="datos-user">
                <div class="box-grid-datos">
                    <div class="box-content-data">
                        <label for="">
                            <h6>Edad</h6>29
                        </label>
                        <button type="button" class=" btn btn-primary" data-toggle="modal" data-target="#EditAgeModal">Editar</button>

                    </div>
                    <div class="box-content-data">
                        <label for="">
                            <h6>Quien Soy</h6>*Añade una descripcion de ti
                        </label>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditWhoModal">Editar</button>

                    </div>
                    <div class="box-content-data">
                        <label for="">
                            <h6>Redes Sociales</h6>*Añade tus redes
                        </label>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditRedModal">Editar</button>

                    </div>
                </div>
            </div>
            <div class="buttons-submit p-2 d-flex "
                style=" width: 80%; grid-column-start: 2; justify-content: flex-end; align-items: center">


                <button type="submit" class="btn bg-success m-4" style="color: white">Guardar</button>




            </div>



        </div>
        <!-- Modal -->
        <div class="modal " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

                    </div>

                    <div class="modal-body">
                        <div class="avatar-preview">
                            <div id="imgpreviewcrop">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary vanilla-result"
                                    data-dismiss="modal">Guardar</button>
                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>



        <!-- Modal Edit Email -->
        <div class="modal" id="EditEmailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Introduce un correo electronico</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-bodyEmail">
                        <div class="box-inputs-modal">

                            <label for="" style="text-transform: uppercase;">Nuevo Correo Electronico</label>
                            <input name="email" type="email">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Listo</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Carrera -->
        <div class="modal" id="EditCarrierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Introduce el Programa/Carrera</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-bodyCarrera">
                        <div class="box-inputs-modal">

                            <label for="" style="text-transform: uppercase;">Programa/Carrera</label>
                            <input name="programa" type="text">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Listo</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Cel -->
        <div class="modal" id="EditCelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Añade un numero telefonico.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-bodyCel">
                        <div class="box-inputs-modal">

                            <label for="" style="text-transform: uppercase;">Contacto/Celular</label>
                            <input name="contacto" type="text">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Listo</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Age -->
        <div class="modal" id="EditAgeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ingresa tu edad actual.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-bodyAge">
                        <div class="box-inputs-modal">

                            <label for="" style="text-transform: uppercase;">Edad Actual</label>
                            <input name="edad" type="text">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Listo</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Edit Who -->
        <div class="modal" id="EditWhoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Como te describes?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-bodyWho">
                        <div class="box-inputs-modal">

                            <label for="" style="text-transform: uppercase;">Añade una descripcion de ti</label>
                            <textarea name="edad" type="text" style="resize: none"></textarea>
  
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Listo</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Edit Red -->
        <div class="modal" id="EditRedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Añade tus redes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-bodyRed">
                        <div class="box-inputs-modal">

                            <label for="" style="text-transform: uppercase;">Instagram</label>
                            <input name="instagram" type="text">
                            <label for="" style="text-transform: uppercase;">Facebook</label>
                            <input name="facebook" type="text">
                            <label for="" style="text-transform: uppercase;">GitHub</label>
                            <input name="github" type="text">
  
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Listo</button>
                    </div>
                </div>
            </div>
        </div>






        <input type="hidden" name="apellido" value="{{ $datos->apellido }}">
        <input type="hidden" name="cedula" value="{{ $datos->cedula }}">
        <input type="hidden" name="contacto" value="{{ $datos->contacto }}">
        <input type="hidden" name="programa" value="{{ $datos->programa }}">
        <input type="hidden" name="rol" value="{{ $datos->rol }}">
        <input type="hidden" name="nombre_empresa" value="{{ $datos->nombre_empresa }}">


    </form>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"
        integrity="sha512-vUJTqeDCu0MKkOhuI83/MEX5HSNPW+Lw46BA775bAWIp1Zwgz3qggia/t2EnSGB9GoS2Ln6npDmbJTdNhHy1Yw=="
        crossorigin="anonymous"></script>

    <script>
        var imgUser = "<?php echo $datos->imagen; ?>";

    </script>

    <script type="text/javascript" src="{{ asset('js/edit-profile.js') }}"></script>





@endsection
