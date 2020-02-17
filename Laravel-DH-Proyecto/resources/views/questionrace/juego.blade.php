@extends('layouts.app')
@section('styles','css/styles-juego.css')

@section('content')

<section class="row text-center">
      <section class="left col-md-4">
            <h2 class="call-to-action">Pregunta #1</h2>
            <p class="cuestion"> {{ $_GET['pregunta'] }} </p>
            <!-- /////////////////  OPCIONES DE CHECKBOX ///////////////-->
            <form action="#" method="POST">
                <label class="radio"> Anden 9 ¾
                    <input type="radio" name="radio" value="opcion 2">
                    <span class="check"></span>
                </label>
                <label class="radio"> Anden 8 ¾
                    <input type="radio" name="radio" value="opcion 2">
                    <span class="check"></span>
                </label>
                <label class="radio"> Anden 6 ½
                    <input type="radio" name="radio" value="opcion 3">
                    <span class="check"></span>
                </label>
                <!-- ///////////////// FIN OPCIONES DE CHECKBOX ///////////////-->
                <button type="submit" class="btn btn-primary"> Responder</button>
            </form>
        </section>

        <!-- ///////////////// IMAGENES RIGTH ///////////////-->
        <section class="rigth col-md-8">
          <div class="header__bajada">

    </div>
            <img src="images/fondo.jpg" class="img-back" alt="Imagen de fondo QUESTION RACE">
            <img src="images/medal.png" class="img-ficha" alt="ficha de juego">
        </section>
    </section>
	@endsection