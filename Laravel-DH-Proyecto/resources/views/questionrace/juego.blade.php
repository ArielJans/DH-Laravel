@extends('layouts.app')
@section('styles','css/styles-juego.css')

@section('content')

<div class="container my-5">
    <div id="portada">
    <h2>PUNTAJE: {{ session()->get('puntaje', 0) }} </h2>

    <form id="juego" action="/juego/next" method="POST">
    @csrf
        {{$pregunta->pregunta}}
        <br>
        <input type="hidden" name="pregunta_id" value="{{$pregunta->id}}">
        @foreach($respuestas as $key => $respuesta)
        <div style="padding-left: 45%">
        <div class="text-left">
        <input name="rta" type="radio" value="{{$respuestas[$random[$key]]->respuesta}}"/>
        <span class="text-dark">{{$respuestas[$random[$key]]->respuesta}}</span><br>
        </div>
        </div>
       @endforeach
        <br>
        <br>
        <input type="submit" name="enviar" id="btnjuego"> <br>
        <div id="rta">

        </div>
    </form>

</div>
        <!-- ///////////////// IMAGENES RIGTH ///////////////-->
        <section class="rigth col-md-8">
          <div class="header__bajada">

    </div>
            <img src="images/fondo.jpg" class="img-back" alt="Imagen de fondo QUESTION RACE">
            <img src="images/medal.png" class="img-ficha" alt="ficha de juego">
        </section>
    </section>
	@endsection
