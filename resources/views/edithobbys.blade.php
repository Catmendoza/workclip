@extends('sidebar')

@section('content-sidebar')

<form class="modal-editp-content" action="{{ route('edit-hobbys.update', $datos->id) }}" method="POST"
    enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <div class="header-modal-editp">

        <label>WORKCLIP HOBBYS</label>

    </div>

    <div class="body-editp-grid">

        <div class="boxgray update-profile">
            <div class="grid-content-update">
                <div class="img-update-user">


                    <div class="image-user-form" >
                        
                    <label for="">Cultura</label>
                    <input type="text" name="cultura" value="{{$datos->cultura}}" >
                
                      
                    </div>

                </div>
                <div class="data-info-user-profile">
                    <label for="">Deporte</label>
                    <input type="text" name="deporte" value="{{$datos->deporte}}" >

       
                </div>

            </div>
        </div>
        <div class="boxgray who-im">
            <label for="">Comida</label>
           <input type="text" name="comida" value="{{$datos->comida}}">
        </div>

    </div>
    <input type="hidden" name="id_perfil" value="{{Auth::user()->id}}" id="">

    <div class="footer-modal-editp">
        <div class="button-modal-profile">
            <a class="btn btn-danger" href="/perfil">Cancelar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </div>



</form>

    
@endsection