@extends('sidebar')

@section('content-sidebar')

<form class="modal-editp-content" action="{{ route('perfil.update', $datos->id) }}" method="POST"
    enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <div class="header-modal-editp">

        <label>WORKCLIP PERFIL</label>

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

    
@endsection