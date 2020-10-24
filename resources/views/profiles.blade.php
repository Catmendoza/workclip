@extends('layout')


@section('css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link rel="shortcut icon" href="https://www.flaticon.es/svg/static/icons/svg/2905/2905064.svg">
<link rel="stylesheet" href="{{ asset('css/cssindex.css') }}" />
<link rel="stylesheet" href="{{ asset('css/modal.css') }}" />

<link rel="stylesheet" href="{{asset('css/searchprofile.css')}}">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
@endsection


@section('content')
    <section class="profiles">
        <div class="container">
            <div class="bigbox-profiles">
                <div class="box-grid-cards">
                    <div class="search-profile-user">
                        <input type="text">
                    </div>


                    @foreach($usuarios as $usuario)
                        
                   
                    <div class="card-profile-user">
                        <div class="content-card-grid">
                            <div class="first-row">

                            </div>
                            <div class="img-user">

                                <img src="{{$usuario->imagen}}" style="width: 100%; height: 100%; ">
                            </div>
                            <div class="name-user-label">
                                <label>nombre</label>
                            </div>

                            <div class="program-user">
                                <label>Programa</label>
                            </div>
                            <div class="progress-university">
                                <label>Progreso Universitario</label>
                            </div>

                            <div class="links-user-card">
                                <i class="fas fa-user-circle"></i>
                            </div>

                            <div class="name-user-text">
                                <label for="">{{$usuario->nombre}}</label>
                                <p>{{$usuario->texto_quiensoy}}</p>
                            </div>

                            <div class="program-user-data">
                                <label>{{$usuario->programa}}</label>
                            </div>

                            <div class="user-data-bar">
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%; font-size: .8vw;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                            </div>


                        </div>
                    </div>

                    @endforeach

                   

                   

                    <div class="pagination">
                        {{ $usuarios->links() }}
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection