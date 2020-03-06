@extends('layouts.app')
@section('styles','css/styles-juego.css')


<section class="img-header" style="background-image: url('./images/fondoFinal.jpg'); height: 100%;
	
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">

@section('content')
<div id="portada" class="container py-5 text-center card" style="position: center; margin-top: 9rem; background-color: rgba(255,255,255, 0.6) !important;">
            <h1 class="won"><?= "EL JUEGO HA TERMINADO"?></h1>
            <h2 class="custex">Usuario: {{ Auth::user()->user }}</h2>
            <h2 class="custex">Tu puntaje es: {{ session()->get('puntaje', 0) }} </h2>
            <h2>Su mejor puntaje es: {{ session()->get('mejorPuntaje', 0) }} </h2><br>
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='/juego' {{session(['puntaje' => 0])}}">Jugar de nuevo!</button>
</div>
</section>
@endsection