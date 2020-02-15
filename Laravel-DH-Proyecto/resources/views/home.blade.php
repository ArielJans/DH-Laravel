@extends('layout.main')
@section('title','QUESTION RACE')
@section('imagenDeFondo', 'images/fondo-web.jpg')
@section('styles','css/styles-index.css')
@section('scripts')
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>
@endsection

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