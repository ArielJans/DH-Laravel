@extends('layouts.app')

@section('content')
<img class="img-header" src="./images/fondo-web.jpg" alt="">
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
