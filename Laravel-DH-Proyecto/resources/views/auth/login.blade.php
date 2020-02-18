@extends('layouts.app')
@section('styles','css/styles-login.css')
@section('title','Iniciar Sesión')
@section('content')
<div class="container py-5 my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-body text-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                      <img class="mb-4 logo" src="images/medal.png" alt="">
                      <h3 class="text-center inic">{{ __('Iniciar Sesion') }}</h3>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="text" class="form-control @error('user') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="user" placeholder="Email" autofocus>

                                @error('user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar Sesion') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidé mi contraseña') }}
                                    </a>
                                    <p class="mt-5 mb-3 text-muted">No estas registrado? <a href="register">Registrarme</a></p>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
