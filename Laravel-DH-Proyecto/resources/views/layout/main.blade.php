<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title', 'title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="@yield('styles','aca va la direccion del style')">
	@section('scripts')
		{{-- scripts --}}
	@show
</head>
<body>
	@include('layout.partials.navbar')
		<img class="img-header" src="@yield('imagenDeFondo','ruta de la imagen de fondo')" alt="imagen de fondo">
	<main>
		@yield('main','aca va el contenido en main')
	</main>
	<footer>
		@include('layout.partials.footer')
	</footer>
</body>
</html>