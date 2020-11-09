@extends('sidebar')

<link rel="stylesheet" href="{{ asset('css/edit-profile.css') }}" />

@section('content-sidebar')

    <form class="" action="{{ route('perfil.update', $datos->id) }}" method="POST"
        enctype="multipart/form-data">
        @method('PATCH')
        @csrf




        <div class="container">

            
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" name="imagen" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"><i class="fas fa-pencil-alt"></i></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url({{ asset($datos->imagen) }});">
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
    <script type="text/javascript" src="{{ asset('js/edit-profile.js') }}"></script>
@endsection
