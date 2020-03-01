@extends('layouts.app')

@section('content')

<section class="img-header" style="background-image: url('./images/fondoRanking.jpg'); height: 100%;
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">


<div class="container py-5 text-center">
    <h3 class="card " style="margin-top: 20px; background-color: #ff9800;">
        RANKING DE JUGADORES
    </h3>
</div>
<div class="container py-1 text-center">
    <table class="table table-hover">
  <thead>
  <tr class="" style="background-color: #ff9800;">
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Puntaje</th>
    </tr>
  </thead>

   <tbody style="position: center; background-color: rgba(255,255,255, 0.6) !important;">
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
</section>

