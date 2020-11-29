<link rel="stylesheet" href="{{ asset('css/pdf.css') }}" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />





<div>

    <a href="{{ route('pdfview', ['download' => 'pdf']) }}">Download PDF</a>




    <div class="row">
        <div class="img">
            <img src="{{ $usuario->imagen }}" alt="" class='imgRedonda'>
        </div>


        <div class="col">
            <div class="titulo">{{ $usuario->nombre }}</div>
            <div class="subtitulo">{{ $usuario->apellido }}</div>
        </div>


    </div>
    <div>
        <hr>
        <TABLE>
            <TR>
                <TD class="titulosTabla">Celular/Telefono</TD>
                <TD class="titulosTabla">Email</TD>
                <TD class="titulosTabla">Carrera</TD>
            </TR>

            <TR>
                <TD>{{ $usuario->contacto }}</TD>
                <TD>{{ $usuario->email }}</TD>
                <TD>{{ $usuario->programa }}</TD>
            </TR>
        </TABLE>
    </div>
    <div class="contenedorTexto row">
        <div class="row col-12" style="margin-left: 10%">
            <div class="contenedorTitulos">
                <div class="textoTitulos">INTRO</div>
                <div class="textoTituloAbajo">Sobre mi</div>
            </div>
            <div class="texto">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
            </div>
        </div>
        <div class="row " style="margin-left: 10%; margin-top:5%">
            <div class="contenedorTitulos">
                <div class="textoTitulos">Habilidades</div>
            </div>
            <div class="progreso col-6">
                <div class="row">
                    <div>
                        <label for="file">File progress:</label>
                        <progress id="file" max="100" value="70"> 70% </progress>
                    </div>
                    <div>
                        <label for="file">File progress:</label>
                        <progress id="file" max="100" value="70"> 70% </progress>
                    </div>
                    <div>
                        <label for="file">File progress:</label>
                        <progress id="file" max="100" value="70"> 70% </progress>
                    </div>

                </div>

            </div>

        </div>
        <div class="row " style="margin-left: 10%; margin-top:5%">
            <div class="contenedorTitulos">
                <div class="textoTitulos">Habilidades</div>
            </div>
            <div class="progreso col-6">
                <div class="row">
                    <div>
                        <label for="file">File progress:</label>
                        <progress id="file" max="100" value="70"> 70% </progress>
                    </div>
                    <div>
                        <label for="file">File progress:</label>
                        <progress id="file" max="100" value="70"> 70% </progress>
                    </div>
                    <div>
                        <label for="file">File progress:</label>
                        <progress id="file" max="100" value="70"> 70% </progress>
                    </div>

                </div>

            </div>

        </div>


    </div>





</div>
