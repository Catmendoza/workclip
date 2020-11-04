@extends('sidebar')

@section('content-sidebar')

<form class="modal-editp-content" action="{{ route('edit-habilidades.update', $datos->id) }}" method="POST"
    enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <div class="header-modal-editp">

        <label>WORKCLIP HABILIDADES</label>

    </div>

    <div class="body-editp-grid">

        <div class="boxgray update-profile">
            <div class="grid-content-update">
                <div class="img-update-user">


                    <div class="image-user-form" >
                        
                    <label for="">Titulo hobby1</label>
                    <input type="text" name="titulo1" value="{{$datos->titulo1}}" >
                
                      
                    </div>

                </div>
                <div class="data-info-user-profile">
                    <label for="">Titulo hobby2</label>
                    <input type="text" name="principal_texto1" value="{{$datos->principal_texto1}}" >

       
                </div>

            </div>
        </div>
        <div class="boxgray who-im">
            <label for="">Titulo hobby3</label>
           <input type="text" name="titulo2" value="{{$datos->titulo2}}">
        </div>
        <div class="boxgray social-networks-user">
            <div class="icons-social">
      1<br>
      2<br>
      3
            </div>
            <div class="inputs-social">
                <input type="text" name="principal_texto2"   value="{{$datos->principal_texto2}}"id="">

                <input type="text" name="titulo3" value="{{$datos->titulo3}}" id="">

                <input type="text" name="principal_texto3" value="{{$datos->principal_texto3}}"id="">
            </div>

      
        <input type="hidden" name="id_perfil" value="{{$datos->id_perfil}}" id="">
  


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