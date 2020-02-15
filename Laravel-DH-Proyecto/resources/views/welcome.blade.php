	{{--
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>El título de mi página</title>
	<link rel="stylesheet" href="style.css">
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
</head>
<body>
	<header>
		<h1>Header</h1>
	</header>
	<!-- Aquí empieza el contenido principal de nuestra página -->
	<main>
		<h2>Relacionado</h2>
	</main>
	<footer>
		<p>©Copyright 2050 by nobody. All rights reversed.</p>
	</footer>
</body>
</html>--}}
@extends('layout.main')

@section('imagenDeFondo', 'images/fondo-web.jpg')

@section('main')

	<div class="container my-5">

		<div class="row d-flex align-items-center my-5 py-5">
			<div class="col-md-7">
				<h2 class="display-4">Título del beneficio 1. <br><span class="text-muted">Sub titulo.</span></h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
					euismod
					semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus
					ac cursus
				commodo.</p>
			</div>
			<div class="col-md-5">
				<img class=" img-fluid mx-auto" src="images/cards1.png" alt="Generic placeholder image">
			</div>
		</div>

		<hr class="" id="beneficio2">

		<div class="row d-flex align-items-center my-5 py-5">
			<div class="col-md-5">
				<img class=" img-fluid mx-auto" src="images/cards2.png" alt="Generic placeholder image">
			</div>
			<div class="col-md-7">
				<h2 class="display-4">Título del beneficio 2. <br><span class="text-muted">Sub titulo.</span></h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
					euismod
					semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus
					ac cursus
				commodo.</p>
			</div>
		</div>

		<hr class="" id="beneficio3">

		<div class="row d-flex align-items-center my-5 py-5">
			<div class="col-md-7">
				<h2 class="display-4">Título del beneficio 3. <br><span class="text-muted">Sub titulo.</span></h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
					euismod
					semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus
					ac cursus
				commodo.</p>
			</div>
			<div class="col-md-5">
				<img class=" img-fluid mx-auto" src="images/cards3.png" alt="Generic placeholder image">
			</div>
		</div>
	</div>

	<section class="call-to-action">
		<h2 class="tex-cta">Empeza a jugar ahora!!</h2>
		<button type="button" class="btn btn-cta btn-primary btn-lg btn-warning"><a href="login.php">COMENZAR</a></button>
	</section>
	@endsection