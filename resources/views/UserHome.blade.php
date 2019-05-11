@extends('Plantillas.MenuUser')
@section('content')
<h1 style="letter-spacing: 10px" align="center">Hombre</h1><br>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">

  	@foreach($Articulo as $eve)
  	@foreach($ArHombre as $hombre)

	@if($eve->genero == 'Hombre' && $eve->id == $hombre->id && $eve->disponibilidad == 'Disponible' && $eve->eliminar == 'activo')
 	<li data-target="#carouselExampleIndicators" data-slide-to="{{$eve->id}}" class="active"></li>
 	@elseif($eve->genero == 'Hombre' && $eve->id>$hombre->id && $eve->disponibilidad == 'Disponible' && $eve->eliminar == 'activo' )

    <li data-target="#carouselExampleIndicators" data-slide-to="{{$eve->id}}"></li>
  	@endif
  	@endforeach
 	@endforeach

  </ol>
  <div class="carousel-inner">
  	@foreach($Articulo as $eve)
	@foreach($ArHombre as $hombre)
		@if($eve->genero == 'Hombre' && $eve->id == $hombre->id && $eve->disponibilidad == 'Disponible' && $eve->eliminar == 'activo')   
	 	<div class="carousel-item active">
		<div class="card mb-8" style="max-width: 4000px; height: 400px; background-color: #49beb7">
		  <div  class="row no-gutters">
		    <div class="col-md-4">
		      <img src="images/{{$eve->foto}}" class="card-img" alt="...">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		        <h1 class="card-title" align="center">Nombre:{{$eve->nombreArticulo}}</h1><br>
		        <br><h1 class="card-title" align="center">Precio:${{$eve->precio_venta}}</h1><br>
		      	<div align="center">
					<a href="{{action('HomeUserController@edit',$eve['id'])}}" class="btn btn-success">Apartar</a>
				</div><br>
		        <p class="card-text" style="letter-spacing: 5px;"><small>Agregado: {{$eve->created_at}}</small></p>
		      </div>
		    </div>
		  </div>
		</div>
    </div>
 	@elseif($eve->genero == 'Hombre' && $eve->id>$hombre->id && $eve->disponibilidad == 'Disponible' && $eve->eliminar == 'activo')
    <div class="carousel-item">
       <div class="card mb-8" style="max-width: 4000px; height: 400px; background-color: #49beb7">
		  <div  class="row no-gutters">
		    <div class="col-md-4">
		      <img src="images/{{$eve->foto}}" class="card-img" alt="...">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		         <h1 class="card-title" align="center">Nombre:{{$eve->nombreArticulo}}</h1><br>
		        <br><h1 class="card-title" align="center">Precio:${{$eve->precio_venta}}</h1><br>
		      	<div align="center">
					<a href="{{action('HomeUserController@edit',$eve['id'])}}" class="btn btn-success">Apartar</a>
				</div><br>
		        <p class="card-text" style="letter-spacing: 5px;"><small>Agregado: {{$eve->created_at}}</small></p>
		      </div>
		    </div>
		  </div>
		</div>	
    </div>
    @endif
@endforeach
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



<h1 style="letter-spacing: 10px" align="center">Mujer</h1><br>	

<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">

  	@foreach($Articulo as $eve)
  		@foreach($ArMujer as $mujer)
	@if($eve->genero == 'Mujer' && $eve->id == $mujer->id && $eve->disponibilidad == 'Disponible' && $eve->eliminar == 'activo')
 	<li data-target="#carouselExampleIndicators1" data-slide-to="{{$eve->id}}" class="active"></li>
 	@elseif($eve->genero == 'Mujer' && $eve->id> $mujer->id && $eve->disponibilidad == 'Disponible')
    <li data-target="#carouselExampleIndicators1" data-slide-to="{{$eve->id}}"></li>
  	@endif
		@endforeach
  @endforeach

  </ol>
  <div class="carousel-inner">
  	@foreach($Articulo as $eve)
  	  		@foreach($ArMujer as $mujer)

	@if($eve->genero == 'Mujer' && $eve->id == $mujer->id && $eve->disponibilidad == 'Disponible' && $eve->eliminar == 'activo')
    <div class="carousel-item active">
		<div class="card mb-8" style="max-width: 4000px; height: 400px; background-color: #49beb7">
		  <div  class="row no-gutters">
		    <div class="col-md-4">
		      <img src="images/{{$eve->foto}}" class="card-img" alt="...">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		         <h1 class="card-title" align="center">Nombre:{{$eve->nombreArticulo}}</h1><br>
		        <br><h1 class="card-title" align="center">Precio:${{$eve->precio_venta}}</h1><br>
		      	<div align="center">
					<a href="{{action('HomeUserController@edit',$eve['id'])}}" class="btn btn-success">Apartar</a>
				</div><br>
		        <p class="card-text" style="letter-spacing: 5px;"><small>Agregado: {{$eve->created_at}}</small></p>
		      </div>
		    </div>
		  </div>
		</div>
    </div>
 	@elseif($eve->genero == 'Mujer' && $eve->id>$mujer->id && $eve->disponibilidad == 'Disponible')
    <div class="carousel-item">
       <div class="card mb-8" style="max-width: 4000px; height: 400px; background-color: #49beb7">
		  <div  class="row no-gutters">
		    <div class="col-md-4">
		      <img src="images/{{$eve->foto}}" class="card-img" alt="...">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		         <h1 class="card-title" align="center">Nombre:{{$eve->nombreArticulo}}</h1><br>
		        <br><h1 class="card-title" align="center">Precio:${{$eve->precio_venta}}</h1><br>
		      	<div align="center">
					<a href="{{action('HomeUserController@edit',$eve['id'])}}" class="btn btn-success">Apartar</a>
				</div><br>
		        <p class="card-text" style="letter-spacing: 5px;"><small>Agregado: {{$eve->created_at}}</small></p>
		      </div>
		    </div>
		  </div>
		</div>	
    </div>
    @endif
@endforeach
  @endforeach

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br>

<h1 align="center">Apartado</h1>


<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">

  	@foreach($Articulo as $eve)
	@if($eve->disponibilidad == 'Apartado' && $eve->id>0 )
 	<li data-target="#carouselExampleIndicators2" data-slide-to="{{$eve->id}}" class="active"></li>
 	@elseif($eve->disponibilidad == 'Apartado' && $eve->id>0 )
    <li data-target="#carouselExampleIndicators2" data-slide-to="{{$eve->id}}"></li>
  	@endif

  @endforeach

  </ol>
  <div class="carousel-inner">
  	@foreach($Articulo as $eve)
	@if($eve->disponibilidad == 'Apartado' && $eve->id == 2 )
    <div class="carousel-item active">
		<div class="card mb-8" style="max-width: 4000px; height: 400px; background-color: #49beb7">
		  <div  class="row no-gutters">
		    <div class="col-md-4">
		      <img src="images/{{$eve->foto}}" class="card-img" alt="...">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		        <h1 class="card-title" align="center">Nombre:{{$eve->nombreArticulo}}</h1><br>
		        <br><h1 class="card-title" align="center">Precio:${{$eve->precio_venta}}</h1><br>
		        <p class="card-text" style="letter-spacing: 5px;"><small>Agregado: {{$eve->created_at}}</small></p>
		      </div>
		    </div>
		  </div>
		</div>
    </div>
 	@elseif($eve->disponibilidad == 'Apartado' && $eve->id>0 )
    <div class="carousel-item">
       <div class="card mb-8" style="max-width: 4000px; height: 400px; background-color: #49beb7">
		  <div  class="row no-gutters">
		    <div class="col-md-4">
		      <img src="images/{{$eve->foto}}" class="card-img" alt="...">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		        <h1 class="card-title" align="center">Nombre:{{$eve->nombreArticulo}}</h1><br>
		        <br><h1 class="card-title" align="center">Precio:${{$eve->precio_venta}}</h1><br>
		        <p class="card-text" style="letter-spacing: 5px;"><small>Agregado: {{$eve->created_at}}</small></p>
		      </div>
		    </div>
		  </div>
</div>	
    </div>
    
    @endif

  @endforeach

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br>



@endsection
