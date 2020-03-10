  
@extends('layouts.app')
@section('styles','css/styles-juego.css')

@section('content')

<div class="row">

    <!-- ///////////////// LEFT ///////////////-->
    <div id="portada" class="left col-md-4">
        <h2>PUNTAJE: {{ session()->get('puntaje', 0) }} </h2>
        <form id="juego" action="/juego" method="POST">
            <h2 class="call-to-action">Pregunta #{{$pregunta->id}}</h2>
            @csrf
            {{$pregunta->pregunta}}
            <br>
                <input type="hidden" name="pregunta_id" id="rtaCorrecta" value="{{$pregunta->id}}">
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
        <div class="floating" id="astro">&nbsp;</div>
    </section>
    <!-- ///////////////// FIN IMAGENES RIGTH ///////////////-->

    <!-- ///////////////// JS PARA COORDENADAS ///////////////-->
    <script>
        document.querySelector("#rtaCorrecta").addEventListener("onload", myFunction)

        var nroPregunta = document.querySelector("#rtaCorrecta").value
        
        function myFunction() {
            if (nroPregunta == 2) {
                //Si es correcta aplicar nuevas coordenadas y continuar a la proxima pregunta
                document.querySelector('#medal').style = "margin-left:27%;"
            }if (nroPregunta == 3) {
                document.querySelector('#medal').style = "margin-left:35%;margin-top: 37%;"
            }if (nroPregunta == 4) {
                document.querySelector('#medal').style = "margin-left:42%;margin-top: 10%;margin-left: 58%;"
            }if (nroPregunta == 5) {
                document.querySelector('#medal').style = "margin-left:49%;margin-top: 8%;margin-left: 67%;"
            }
        }
    </script>
    <!-- ///////////////// FIN JS PARA COORDENADAS ///////////////-->
</div>
@endsection