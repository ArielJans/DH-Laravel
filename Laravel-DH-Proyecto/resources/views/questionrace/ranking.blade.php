@extends('layouts.app')

@section('content')
<div class="container py-5 text-center">
    <h3>
        <p class="descripcion">RANKING DE JUGADORES</p>
    </h3>
</div>
<div class="container py-1 text-center">
    <table class="table table-hover">
  <thead>
  <tr class="table-warning">
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Puntaje</th>
    </tr>
  </thead>

   <tbody>
   @foreach($ranking as $key => $user)
    <tr>
      <th scope="row">{{++$a}}</th>
      <td>{{$ranking[$key]->usuario}}</td>
      <td>{{$ranking[$key]->puntaje}}</td>
    </tr>
    @endforeach
   </tbody>
</table>


<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
{{ $ranking->links()}}
  </ul>
</nav>


</div>
@endsection
