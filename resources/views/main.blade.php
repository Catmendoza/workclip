@extends('layout')
@section('content')

    <section>
        <div class="flex">
            <div style="width:100%;">
                <div class="navbar navbar-expand-lg navbar-light  lighten-5  " style="background-color: white">
                    <form class=" form-inline">
                        <div class="form-group has-search" style="margin-left: 30%">
                            <i class="fa fa-search form-control-feedback"></i>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>

                    <div style="margin-left: 20%">
                        <div>
                            <button class="btn btn-lg" style="background-color:transparent;">
                                <i class="fas fa-home"></i>
                                <h6>Inicio</h6>
                            </button>
                            <button class="btn btn-lg" style="background-color:transparent;">
                                <i class="fa fa-user-plus"></i>
                                <h6>Buscar perfil</h6>
                            </button>

                            <button class="btn btn-lg " type="button" id="btn-public">
                                <i class="fa fa-plus-circle"></i>
                                <h6>Añadir publicación</h6>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row" style="background-color:  #e0e0e0; margin-right:0;">
                <div class="col-md-7" style=" align-items: stretch;margin-left: 100px; margin-top: 30px;">
                    <div class="flex-container">
                        <div style="width: 100%; border-radius: 10px; background-color: #1a2243">
                            <img src=".\img\cata.png" alt="" class="rounded-circle float-left imgpeque">
                            <h4 class="textWhite" style="margin-top: 20px;">Catalina Mendoza Alvarez</h4>
                            <h6 class="textWhite">Tec.Sistemas</h6>
                        </div>

                        <div
                            style="margin-top: 10px; width: 100%; border-radius: 10px; margin-bottom: 20px; background-color: white">

                            <h6 style="text-align: left; margin: 5px; margin-left:20px; color:#979797">Proyecto name</h6>
                            <hr>
                            <div>
                                <img src=".\img\descarga.png" alt="" class=" float-left imgProyectos">
                                <div style="margin-left:25px; text-align: left">
                                    <h4 style="margin-top: 20px; color: #515151">Descripción</h4>
                                    <div style="margin-right: 100px; color:#504d4d">
                                        <p>
                                        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</h6>
                                        </p>
                                        <a class="btn-floating btn-tw" type="button" role="button"><i class="fab fa-twitter"
                                                style="color: #504d4d"></i></a>
                                        <a class="btn-floating btn-tw" type="button" role="button"><i
                                                class="fab fa-instagram" style="color: #504d4d"></i></a>
                                        <a class="btn-floating btn-tw" type="button" role="button"><i class="fab fa-github"
                                                style="color: #504d4d"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="row" style=" margin-top:10%;margin-right:0;">
                                <div class="text-left col-md-3 " style="font-size:15px; margin-left:10% ">
                                    <p style="line-height: 20px; margin-top:20px">Estado del <br> proyecto </p>

                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary btn-sm">Seguir</button>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary btn-sm">Me interesa</button>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary btn-sm">Postularme</button>
                                </div>
                            </div>
                            <div>
                                <div style="text-align: left;line-height:1px;font-size:15px; margin-left:8% ">
                                    <p>25% completado</p>

                                </div>
                                <div class="progress" style="width: 100px;margin-left:8%; margin-bottom: 10px ">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: 25%; background-color: #5db660" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-md-3"
                    style="margin-top: 30px; margin-left: 30px;height: 300px; width: 25%;border-radius: 10px; background-color: #1a2243">
                    <h5 style="margin-top: 20px;margin-left: 20px; color: white;text-align: left">Categoria</h5>
                    <div class="checkbox " style="margin-left: 10px;line-height:10px">
                        <label style="color:white;font-size:20px; ">
                            <input type="checkbox">
                            Emprendimiento
                        </label>

                    </div>
                    <div class="checkbox" style="margin-left: 10px; line-height:10px; ">

                        <label style="color:white;font-size:20px">
                            <input type="checkbox">
                            Proyectos
                        </label>
                    </div>
                </div>
            </div>
            <div class="row" style="background-color:  #e0e0e0 ; margin-right:0;">
                <div class="col-md-7" style=" align-items: stretch;margin-left: 100px; margin-top: 30px;">
                    <div class="flex-container">
                        <div style="width: 100%; border-radius: 10px; background-color: #1a2243">
                            <img src=".\img\cata.PNG" alt="" class="rounded-circle float-left imgpeque">
                            <h4 class="textWhite" style="margin-top: 20px;">Catalina Mendoza Alvarez</h4>
                            <h6 class="textWhite">Tec.Sistemas</h6>
                        </div>

                        <div
                            style="margin-top: 10px; width: 100%; border-radius: 10px; margin-bottom: 20px; background-color: white">

                            <h6 style="text-align: left; margin: 5px; margin-left:20px; color:#979797">Proyecto name</h6>
                            <hr>
                            <div>
                                <img src=".\img\descarga.png" alt="" class=" float-left imgProyectos">
                                <div style="margin-left:25px; text-align: left">
                                    <h4 style="margin-top: 20px; color: #515151">Descripción</h4>
                                    <div style="margin-right: 100px; color:#504d4d">
                                        <p>
                                        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</h6>
                                        </p>
                                        <a class="btn-floating btn-tw" type="button" role="button"><i class="fab fa-twitter"
                                                style="color: #504d4d"></i></a>
                                        <a class="btn-floating btn-tw" type="button" role="button"><i
                                                class="fab fa-instagram" style="color: #504d4d"></i></a>
                                        <a class="btn-floating btn-tw" type="button" role="button"><i class="fab fa-github"
                                                style="color: #504d4d"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="row" style=" margin-top:10%; margin-right:0;">
                                <div class="text-left col-md-3 " style="font-size:15px; margin-left:10% ">
                                    <p style="line-height: 20px; margin-top:20px">Estado del <br> proyecto </p>

                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary btn-sm">Seguir</button>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary btn-sm">Me interesa</button>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary btn-sm">Postularme</button>
                                </div>
                            </div>
                            <div>
                                <div style="text-align: left;line-height:1px;font-size:15px; margin-left:8% ">
                                    <p>25% completado</p>

                                </div>
                                <div class="progress" style="width: 100px;margin-left:8%; margin-bottom: 10px ">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: 25%; background-color: #5db660" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row" style="background-color:  #e0e0e0 ;margin-right:0;">
                <div class="col-md-7" style=" align-items: stretch;margin-left: 100px; margin-top: 30px;">
                    <div class="flex-container">
                        <div style="width: 100%; border-radius: 10px; background-color: #1a2243">
                            <img src=".\img\cata.PNG" alt="" class="rounded-circle float-left imgpeque">
                            <h4 class="textWhite" style="margin-top: 20px;">Catalina Mendoza Alvarez</h4>
                            <h6 class="textWhite">Tec.Sistemas</h6>
                        </div>

                        <div
                            style="margin-top: 10px; width: 100%; border-radius: 10px; margin-bottom: 20px; background-color: white">

                            <h6 style="text-align: left; margin: 5px; margin-left:20px; color:#979797">Producto name</h6>
                            <hr>
                            <div>
                                <img src=".\img\descarga.png" alt="" class=" float-left imgProyectos">
                                <div style="margin-left:25px; text-align: left">
                                    <h4 style="margin-top: 20px; color: #515151">Descripción</h4>
                                    <div style="margin-right: 100px; color:#504d4d">
                                        <p>
                                        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</h6>
                                        </p>
                                        <a class="btn-floating btn-tw" type="button" role="button"><i class="fab fa-twitter"
                                                style="color: #504d4d"></i></a>
                                        <a class="btn-floating btn-tw" type="button" role="button"><i
                                                class="fab fa-instagram" style="color: #504d4d"></i></a>
                                        <a class="btn-floating btn-tw" type="button" role="button"><i class="fab fa-github"
                                                style="color: #504d4d"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="row" style=" margin-top:5px;margin-right:0; ">

                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary btn-sm"><i
                                            class="fa fa-heart"></i></button>
                                </div>

                                <div class="col-md-10">
                                    <button type="button" class="btn btn-primary btn-sm">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="publicModal" class="modal-public-main">
            <div class="modal-public-content">

                <div class="header-modal">
                    <h4>Publicar</h4>
                    <div class="close-modal-public">
                        <a><i class="fas fa-times"></i></a>
                    </div>

                </div>
                <h4>¿Que quieres publicar?</h4>
                <div class="select-modal-public">

                    <div class="select-box">
                        <a id="btn-publicProject"><i class="fas fa-desktop"></i></a>
                        <h4>Proyecto</h4>
                    </div>
                    <div class="select-box">
                        <a><i class="fas fa-tags"></i></a>
                        <h4>Producto</h4>
                    </div>

                </div>
                <div class="select-modal-public">
                    <div class="select-box">
                        <a id="btn-publicJob"><i class="fas fa-id-badge"></i></a>
                        <h4>Oferta de trabajo</h4>
                    </div>
                </div>

            </div>


        </div>
        <div id="publicJobModa" class="modal-publish-job">
            <div class="modal-pj-content">
                <div class="header-modal-pj">
                    <h3>Publicar empleo</h3>
                    <div class="close-modal-pj">
                        <a><i class="fas fa-times"></i></a>
                    </div>
                </div>

                <div class="body-modal-pj">
                    <div class="titles-modal-pj">
                        <h3>Titulo del empleo</h3>
                    </div>

                    <div class="titles-modal-pj">
                        <h3>Tiempo del empleo</h3>
                    </div>
                    <div class="titles-modal-pj">
                        <h3>Tipo de empleo</h3>
                    </div>
                    <div class="titles-modal-pj">
                        <h3>Tipo de contrato</h3>
                    </div>
                    <div class="titles-modal-pj" style="border-radius: 0 0 0 0.5em">
                        <h3>Salario</h3>
                    </div>

                    <div class="box-texts-pj">
                        <input type="text" name="" id="" />
                    </div>

                    <div class="radio-btns-pj">
                        <input type="radio" name="time-job" id="" />
                        <label>Remoto</label>
                        <input type="radio" name="time-job" id="" />
                        <label>Presencial</label>
                    </div>

                    <div class="radio-btns-pj">
                        <input type="radio" name="job-type" id="" />
                        <label>Tiempo completo</label>
                        <input type="radio" name="job-type" id="" />
                        <label>Medio tiempo</label>
                        <input type="radio" name="job-type" id="" />
                        <label>De preferencia</label>
                    </div>

                    <div class="box-select-pj">
                        <select name="" id="">
                            <option value="">Selecciona una opcion</option>
                            <option value="">1</option>
                        </select>
                    </div>

                    <div class="salary-box">
                        <div class="range-salary">
                            <h4>$</h4>
                            <div class="range one">
                                <input type="number" name="" placeholder=" ej: 700000" id="" />
                            </div>
                            <h4>a</h4>
                            <div class="range two">
                                <input type="number" placeholder=" 900000" name="" id="" />
                            </div>
                        </div>
                    </div>

                    <div class="titles-modal-pj">
                        <h3>Recibir notificaciones (Opcional)</h3>
                    </div>
                    <div class="titles-modal-pj">
                        <h3>Desea recibir HV</h3>
                    </div>
                    <div class="titles-modal-pj" style="border-radius: 0 0 0.5em 0.5em">
                        <h3>Descripcion del empleo</h3>
                    </div>

                    <div class="email-box-pj">
                        <h4>Email</h4>
                        <input type="email" name="" id="" />
                    </div>

                    <div class="radio-btns-pj" style="grid-column-start: 4; grid-row-start: 2">
                        <input type="radio" name="hv" id="" />
                        <label>Si</label>
                        <input type="radio" name="hv" id="" />
                        <label>No</label>
                    </div>

                    <div class="box-texts-pj" style="grid-column-start: 4; grid-row-start: 3">
                        <textarea type="text" maxlength="200"></textarea>
                    </div>

                    <div class="btn-submit-pj">
                        <button type="submit">Publicar</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="publicProjectModal" class="modal-publish-project">
            <div class="modal-pp-content">
                <div class="header-modal-pp">
                    <h3>Publicar Proyecto</h3>
                    <div class="close-modal-pp">
                        <a><i class="fas fa-times"></i></a>
                    </div>
                </div>

                <div class="body-modal-pp">
                    <div class="modal-side-left">

                        <div class="titles-box-pp">
                            <h3>Titulo</h3>
                        </div>

                        <div class="box-texts">
                            <input type="text" name="" id="">
                        </div>

                        <div class="titles-box-pp">
                            <h3>Descripcion</h3>
                        </div>

                        <div class="box-texts">
                            <textarea type="text" maxlength="200"></textarea>
                        </div>

                        <div class="titles-box-pp">
                            <h3>Estado</h3>
                        </div>

                        <div class="box-select left">
                            <input type="range" name="rango" max="100" min="0">

                        </div>

                    </div>

                    <div class="modal-side-right">

                        <div class="titles-box-pp">
                            <h3>Adjuntar imagen</h3>
                        </div>

                        <div class="box-file">

                            <input type="file" name="" id="">
                        </div>

                        <div class="titles-box-pp">
                            <h3>Finalidad</h3>
                        </div>

                        <div class="box-select right">
                            <select name="" id="">
                                <option value="">1</option>
                            </select>
                        </div>
                        <div class="btn-submit-pp">
                            <button type="submit">Publicar</button>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/f579ace1fb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
