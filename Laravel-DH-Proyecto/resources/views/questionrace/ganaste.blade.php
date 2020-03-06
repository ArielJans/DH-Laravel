@extends('layouts.app')
@section('styles','css/styles-juego.css')


<section class="img-header" style="background-image: url('./images/fondoFinal.jpg'); height: 100%;
	
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">

@section('content')
<div id="portada" class="container py-5 text-center card sec_card" style="position: center; margin-top: 9rem; background-color: rgba(255,255,255, 0.6) !important;">

  <img class="img_l" src="images/medal.png" alt="">
  <img class="img_r" src="images/medal.png" alt="">
            <p class="fel">Completaste el juego</p>
            <h1 class="won"><?="Felicidades!!"?></h1>
            <h2 class="custex">Usuario: {{ Auth::user()->user }}</h2>
            <h2 class="custex">Tu puntaje es: {{ session()->get('puntaje', 0) }} </h2><br>
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='/juego' {{session(['puntaje' => 0])}}">Jugar de nuevo!</button>
</div>
</section>
@endsection