@extends('layouts.app')
@section('styles','css/styles-juego.css')


@section('content')

    <section class="row">
        <section class="left col-md-4">
            <h1 class="name">{{ Auth::user()->user }}</h1>
            <img src="storage/@if(Auth::user()->imagen == ''){{'perfilGenerico.jpg'}}
            @else{{Auth::user()->imagen}}@endif" alt="Imagen de perfil">
            <p>País: <strong>Argentina</strong></p>
            <button type="button" class="btn btn-perfil btn-primary">Cambiar avatar</button>
        </section>

        <section class="col-md-8">
        <form class="card">
            <label>Usuario</label>
            <input type="text" value="{{ Auth::user()->user }}" class="col-md-12">
            <label>Nombre</label>
            <input type="text" value="{{ Auth::user()->nombre }}" class="col-md-12">
            <label>Correo</label>
            <input type="text" value="{{ Auth::user()->email }}" class="col-md-12">
            <label>
                <button class="btn btn-primary">Actualizar datos</button>
            </label>
        </form>
        </section>
    </section>


@endsection