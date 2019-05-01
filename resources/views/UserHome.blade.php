@extends('Plantillas.MenuUser')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">

  	@foreach($Articulo as $eve)
	@if($eve->id == 1 )
 	<li data-target="#carouselExampleIndicators" data-slide-to="{{$eve->id}}" class="active"></li>
   	@else
    <li data-target="#carouselExampleIndicators" data-slide-to="{{$eve->id}}"></li>
  	@endif

  @endforeach

  </ol>
  <div class="carousel-inner">
  	@foreach($Articulo as $eve)
	@if($eve->id == 1 )
    <div class="carousel-item active">
		<div class="card mb-8" style="max-width: 4000px; height: 400px; background-color: #ca6900">
		  <div  class="row no-gutters">
		    <div class="col-md-4">
		      <img src="images/{{$eve->foto}}" class="card-img" alt="...">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		        <h1 class="card-title" align="center">{{$eve->nombre}}</h1><br>
		        <h1 class="card-title" align="center">{{$eve->dia}}</h1>
		        <h1 class="card-title" align="center">{{$eve->hora}}</h1>
		        <h1 class="card-title" align="center">{{$eve->lugar}}</h1>
		        <p class="card-text" style="letter-spacing: 5px;"><small>Agregado: {{$eve->created_at}}</small></p>
		      </div>
		    </div>
		  </div>
</div>
    </div>
    @else
    <div class="carousel-item">
       <div class="card mb-8" style="max-width: 4000px; height: 400px; background-color: #ca6900">
		  <div  class="row no-gutters">
		    <div class="col-md-4">
		      <img src="images/{{$eve->foto}}" class="card-img" alt="...">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		        <h1 class="card-title" align="center">{{$eve->nombre}}</h1><br>
		        <h1 class="card-title" align="center">{{$eve->dia}}</h1>
		        <h1 class="card-title" align="center">{{$eve->hora}}</h1>
		        <h1 class="card-title" align="center">{{$eve->lugar}}</h1>
		        <p class="card-text" style="letter-spacing: 5px;"><small>Agregado: {{$eve->created_at}}</small></p>
		      </div>
		    </div>
		  </div>
</div>	
    </div>
    
    @endif

  @endforeach

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


@endsection