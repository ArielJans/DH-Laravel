  
@extends('layouts.app')
@section('styles','css/styles-juego.css')

@section('content')

<div class="row">

    <!-- ///////////////// LEFT ///////////////-->
    <div id="portada" class="left col-md-4">
        <h2>PUNTAJE: {{ session()->get('puntaje', 0) }} </h2>
        <form id="juego" action="/juego" method="POST">
            <h2 class="call-to-action" id="rtaCorrecta">Pregunta #{{$pregunta->id}}</h2>
            @csrf
            {{$pregunta->pregunta}}
            <br>
                <input type="hidden" name="pregunta_id" value="{{$pregunta->id}}">
            @foreach($respuestas as $key => $respuesta)

            <div class=" btn-group-toggle btn-block" data-toggle="buttons">
                <label class="btn btn-secondary active" id="resp{{$key}}">
                    <input type="radio" name="rta" value="{{$respuestas[$random[$key]]->respuesta}}" checked>{{$respuestas[$random[$key]]->respuesta}}
                </label>
            </div>
            @endforeach

            <button class="btn btn-primary" type="submit" name="enviar" id="btnjuego">Enviar</button>
        </form>
    </div>
    <!-- /////////////////FIN LEFT ///////////////-->

    <!-- ///////////////// IMAGENES RIGTH ///////////////-->
    <section class="rigth col-md-8">
        <img src="images/fondo.jpg" class="img-back" alt="Imagen de fondo QUESTION RACE">
        <img src="images/medal.png" class="img-ficha" id="medal" alt="ficha de juego">
    </section>
    <!-- ///////////////// FIN IMAGENES RIGTH ///////////////-->

    <!-- ///////////////// JS PARA COORDENADAS ///////////////-->
    <!--
    <script>
    const rta = document.getElementById("rtaCorrecta");
        juego.addEventListener("submit", e=>{
            e.preventDefault()
            if (rta.innerText == 2) {
                //accion para respuesta incorrecta
                alert("Respuesta incorrecta")
            }else{
                //Si es correcta aplicar nuevas coordenadas y continuar a la proxima pregunta
                //document.getElementById("medal").style.margin-left = "28%";
                alert("Respuesta correcta")
            }
        })
    </script>
    -->

    <script>
        const rta = document.querySelector("#rtaCorrecta").innerText; // Tomo bien el etxto y n° que cambia.
        juego.addEventListener("submit", e=>{
            //e.preventDefault()
            if (rta == "Pregunta #3") {
                //accion para respuesta incorrecta
                //alert("Respuesta incorrecta")
                //document.querySelector('#medal').style.margin-left = "28%";
            }else{
                //Si es correcta aplicar nuevas coordenadas y continuar a la proxima pregunta
                //document.querySelector('#medal').style.margin-left = "28%";
                //alert("Respuesta INCorrecta")
            }
        })
        
    </script>
 <!-- style="property:value;" ???? -->
<!-- ///////////////// FIN JS PARA COORDENADAS ///////////////-->
</div>
@endsection