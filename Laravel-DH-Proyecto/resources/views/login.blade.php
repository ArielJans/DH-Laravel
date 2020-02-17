@extends('layouts.app')
@section('styles','css/styles-login.css')
@section('title','Iniciar Sesión')
@section('main')

<section class="text-center">
	<form class="form-signin" action="" method="POST" enctype="multipart/form-data">
		<img class="mb-4 logo" src="images/medal.png" alt="">
		<h1 class="h3 mb-3 font-weight-normal">Iniciar Sesion</h1>
		<div class="form-row" id="lila">
			<div class="form-group col-md-6">
				<input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="">
					</div>
					<div class="form-group col-md-6">
					<input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
					</div>
					<div class="form-group col-md-6">
					<input type="checkbox" name="remember" id="remember">
					<label for="remember">Recordarme</label>
					</div>
					<div class="form-group col-md-6">
					@if (isset($errorMessage) && $errorMessage != "") {
						echo $errorMessage;
					} @endif
				</div>
			</div>
			<div class="form-action">
				<button type="submit" class="btn btn-primary">Iniciar sesión</button>
				<a href="reset-pwd-request.php">Olvidé mi contraseña</a>
			</div>
			<p class="mt-5 mb-3 text-muted">No estas registrado? <a href="register.php">Registrarme</a></p>

		</form>
	</section>
	@endsection