
@extends('layouts.app')
@section('styles','css/styles-login.css')
@section('content')

<div class="container py-5 my-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <img class="mb-4 logo" src="images/medal.png" alt="">
                <h3 class="text-center">{{ __('Registrarse') }}</h3>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}" class="needs-validation" novalidate>
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus placeholder="Nombre">

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('user') is-invalid @enderror" name="user" value="{{ old('user') }}" required autocomplete="user" autofocus placeholder="Usuario">

                                @error('user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repetir Contraseña">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="avatar" class="col-md-3 col-form-label">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen" value="{{ old('avatar') }}" required autocomplete="avatar"> <!-- saque la clase form-control-->

                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-b btn-primary">
                                    {{ __('Registrarme') }}
                                </button>
                            <p class="mt-5 mb-3 text-muted">Ya estas registrado? <a href="login">Ingresar</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
