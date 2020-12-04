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

    <form class="" action="./edit-habilidades" method="POST" enctype="multipart/form-data">

        @csrf
        <label for="" class="name-page" style="text-align: center">MIS HABILIDADES</label>



        <!-- Modal Edit Email -->
        <div class="modal" id="EditEmailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Introduce una Habilidad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-bodyEmail">
                        <div class="box-inputs-modal">

                            <label for="" style="text-transform: uppercase;">Titulo Habilidad</label>
                            <input id="email" name="titulo1" value="">
                            <label for="" style="text-transform: uppercase;">Texto Habilidad</label>
                            <input id="programa" name="principal_texto1" value="" type="text">
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
                        <h5 class="modal-title" id="exampleModalLabel">Introduce una Habilidad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-bodyCarrera">
                        <div class="box-inputs-modal">

                            <label for="" style="text-transform: uppercase;">Titulo Habilidad</label>
                            <input id="programa" name="titulo2" value="" type="text">

                            <label for="" style="text-transform: uppercase;">Texto Habilidad</label>
                            <input id="programa" name="principal_texto2" value="" type="text">
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
                        <h5 class="modal-title" id="exampleModalLabel">Introduce una Habilidad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <input type="hidden" name="id_perfil" value="{{ Auth::user()->id }}" id="">
                        </button>
                    </div>
                    <div class="modal-bodyCel">
                        <div class="box-inputs-modal">

                            <label for="" style="text-transform: uppercase;">Titulo Habilidad</label>
                            <input id="contacto" name="titulo3" value="" type="text">
                            <label for="" style="text-transform: uppercase;">Texto Habilidad</label>
                            <input id="programa" name="principal_texto3" value="" type="text">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="savecontacto" type="button" data-dismiss="modal" class="btn btn-primary">Listo</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal Edit Aptitud 1 -->
        <div class="modal" id="EditApt1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Introduce una aptitud</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-bodyEmail">
                        <div class="box-inputs-modal">

                            <label for="" style="text-transform: uppercase;">Aptitud</label>
                            <input id="email" name="titulo1" value="">
                            <label for="" style="text-transform: uppercase;">Selecciona una aptitud</label>
                            <input id="programa" name="principal_texto1" value="" type="text">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="saveemail" type="button" class="btn btn-primary" data-dismiss="modal">Listo</button>
                    </div>
                </div>
            </div>
        </div>


      <!-- Modal Edit Aptitud 2 -->
      <div class="modal" id="EditApt2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Introduce una Habilidad</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-bodyEmail">
                  <div class="box-inputs-modal">

                      <label for="" style="text-transform: uppercase;">Titulo Habilidad</label>
                      <input id="email" name="titulo1" value="">
                      <label for="" style="text-transform: uppercase;">Texto Habilidad</label>
                      <input id="programa" name="principal_texto1" value="" type="text">
                  </div>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button id="saveemail" type="button" class="btn btn-primary" data-dismiss="modal">Listo</button>
              </div>
          </div>
      </div>
  </div>



        <div class="grid-profile">



            <div class="datos-user" style="justify-content: flex-end">
                <div class="box-grid-datos">
                    <div class="box-content-data">
                        <label for="">
                            <h6>HABILIDADES</h6>
                            <h6 id="email2"></h6>
                        </label>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#EditEmailModal">Editar</button>
                    </div>
                    <div class="box-content-data">
                        <label for="">
                            <h6>HABILIDADES</h6>
                            <h6 id="programa2"></h6>
                        </label>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#EditCarrierModal">Editar</button>

                    </div>
                    <div class="box-content-data">
                        <label for="">
                            <h6>HABILIDADES</h6>
                            <h6 id="contacto2"></h6>
                        </label>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#EditCelModal">Editar</button>

                    </div>

                </div>
            </div>

            <div class="datos-user" style="justify-content: flex-end">
                <div class="box-grid-datos">
                    <div class="box-content-data">
                        <label for="">
                            <h6>Aptitudes</h6>
                            <h6 id="email2"></h6>
                        </label>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#EditApt1">Editar</button>
                    </div>
                    <div class="box-content-data">
                        <label for="">
                            <h6>Aptitudes</h6>
                            <h6 id="programa2"></h6>
                        </label>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#EditApt2">Editar</button>

                    </div>
           

                </div>
            </div>

            

            <div class="buttons-submit p-2 d-flex "
                style=" width: 80%; grid-column-start: 2; justify-content: flex-end; align-items: center">


                <button type="submit" class="btn btn-success">Guardar</button>




            </div>



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
