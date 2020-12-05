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

    <form class="modal-editp-content" action="{{ route('edit-hobbys.update', $datos->id) }}" method="POST"
        enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <label for="" class="name-page" style="text-align: center">MIS HOBBIES</label>






        <!-- Modal Edit Email -->
        <div class="modal" id="EditEmailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cultura</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-bodyEmail">
                        <div class="box-inputs-modal">

                            <label for="" style="text-transform: uppercase;">Cultura</label>
                            <input id="email" name="cultura" value="{{$datos->cultura}}">

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="saveemail" type="button" class="btn btn-primary" data-dismiss="modal">Listo</button>
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
                        <h5 class="modal-title" id="exampleModalLabel">DEPORTE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-bodyCarrera">
                        <div class="box-inputs-modal">

                            <label for="" style="text-transform: uppercase;">DEPORTE</label>
                            <input id="programa" name="deporte" value="{{$datos->deporte}}" type="text">

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="saveprograma" type="button" data-dismiss="modal" class="btn btn-primary">Listo</button>
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
                        <h5 class="modal-title" id="exampleModalLabel">COMIDA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <input type="hidden" name="id_perfil" value="{{ Auth::user()->id }}" id="">
                        </button>
                    </div>
                    <div class="modal-bodyCel">
                        <div class="box-inputs-modal">

                            <label for="" style="text-transform: uppercase;">COMIDA</label>
                        <input id="contacto" name="comida" value="{{$datos->comida}}" type="text">

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="savecontacto" type="button" data-dismiss="modal" class="btn btn-primary">Listo</button>
                    </div>
                </div>
            </div>
        </div>







        <div class="grid-profile">



            <div class="datos-user" style="justify-content: flex-end">
                <div class="box-grid-datos">
                    <div class="box-content-data">
                        <label for="">
                            <h6>Cultura</h6>
                            <h6 id="email2"></h6>
                        </label>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#EditEmailModal">Editar</button>
                    </div>
                    <div class="box-content-data">
                        <label for="">
                            <h6>Deporte</h6>
                            <h6 id="programa2"></h6>
                        </label>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#EditCarrierModal">Editar</button>

                    </div>
                    <div class="box-content-data">
                        <label for="">
                            <h6>Comida</h6>
                            <h6 id="contacto2"></h6>
                        </label>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#EditCelModal">Editar</button>

                    </div>

                </div>
            </div>

            <div class="buttons-submit p-2 d-flex "
                style=" width: 80%; grid-column-start: 2; justify-content: flex-end; align-items: center">


                <button type="submit" class="btn btn-success">Guardar</button>




            </div>

    </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"
        integrity="sha512-vUJTqeDCu0MKkOhuI83/MEX5HSNPW+Lw46BA775bAWIp1Zwgz3qggia/t2EnSGB9GoS2Ln6npDmbJTdNhHy1Yw=="
        crossorigin="anonymous"></script>





    <script type="text/javascript" src="{{ asset('js/edit-profile.js') }}"></script>


@endsection
