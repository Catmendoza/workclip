@extends('sidebar')

<link rel="stylesheet" href="{{ asset('css/edit-profile.css') }}" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css"
    integrity="sha512-zxBiDORGDEAYDdKLuYU9X/JaJo/DPzE42UubfBw9yg8Qvb2YRRIQ8v4KsGHOx2H1/+sdSXyXxLXv5r7tHc9ygg=="
    crossorigin="anonymous" />
@section('content-sidebar')

    <form class="" action="{{ route('perfil.update', $datos->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf


        <div class="container">
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" name="imagen" accept=".png, .jpg, .jpeg" />
                    <label type="button" id="browseImg" class="btn btn-primary" for="imageUpload" data-toggle="modal"
                        data-target="#exampleModal"><i class="fas fa-pencil-alt"></i></label>
                </div>
                <div class="avatar-preview" id="UserImgBox" style="background-image: url({{ asset($datos->imagen) }})">



                </div>
                <button type="button" id="DeleteImgBtn" class="btn btn-danger">Eliminar</button>
            </div>

        </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="avatar-preview">
                            <div id="imgpreviewcrop">

                            </div>


                        </div>
                    </div>


                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="vanilla-result">Save changes</button>
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

    <!-- Button trigger modal -->




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
