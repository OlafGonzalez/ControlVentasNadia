@extends('Plantillas.MenuUser')
@section('content')


<h1 style="letter-spacing: 10px" align="center">Joyeria</h1><br>	

<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">

  	@foreach($Articulo as $eve)
  		@foreach($ArMujerJoyeria as $mujer)
	@if($eve->genero == 'Mujer' && $eve->id == $mujer->id && $eve->disponibilidad == 'Disponible' && $eve->eliminar == 'activo' && $eve->categoria == 'Joyeria')
 	<li data-target="#carouselExampleIndicators1" data-slide-to="{{$eve->id}}" class="active"></li>
 	@elseif($eve->genero == 'Mujer' && $eve->id> $mujer->id && $eve->disponibilidad == 'Disponible' && $eve->categoria == 'Joyeria')
    <li data-target="#carouselExampleIndicators1" data-slide-to="{{$eve->id}}"></li>
  	@endif
		@endforeach
  @endforeach

  </ol>
  <div class="carousel-inner">
  	@foreach($Articulo as $eve)
  	  		@foreach($ArMujerJoyeria as $mujer)

	@if($eve->genero == 'Mujer' && $eve->id == $mujer->id && $eve->disponibilidad == 'Disponible' && $eve->eliminar == 'activo' && $eve->categoria == 'Joyeria')
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
					<a href="{{action('UserMujerHomeController@edit',$eve['id'])}}" class="btn btn-success">Apartar</a>
				</div><br>
		        <p class="card-text" style="letter-spacing: 5px;"><small>Agregado: {{$eve->created_at}}</small></p>
		      </div>
		    </div>
		  </div>
		</div>
    </div>
 	@elseif($eve->genero == 'Mujer' && $eve->id>$mujer->id && $eve->disponibilidad == 'Disponible' && $eve->categoria == 'Joyeria')
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
					<a href="{{action('UserMujerHomeController@edit',$eve['id'])}}" class="btn btn-success">Apartar</a>
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




<h1 style="letter-spacing: 10px" align="center">Blusas</h1><br>	


<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">

  	@foreach($Articulo as $eve)
  		@foreach($ArMujerBlusa as $mujer)
	@if($eve->genero == 'Mujer' && $eve->id == $mujer->id && $eve->disponibilidad == 'Disponible' && $eve->eliminar == 'activo' && $eve->categoria == 'Blusas')
 	<li data-target="#carouselExampleIndicators2" data-slide-to="{{$eve->id}}" class="active"></li>
 	@elseif($eve->genero == 'Mujer' && $eve->id> $mujer->id && $eve->disponibilidad == 'Disponible' && $eve->categoria == 'Blusas')
    <li data-target="#carouselExampleIndicators2" data-slide-to="{{$eve->id}}"></li>
  	@endif
		@endforeach
  @endforeach

  </ol>
  <div class="carousel-inner">
  	@foreach($Articulo as $eve)
  	  		@foreach($ArMujerBlusa as $mujer)

	@if($eve->genero == 'Mujer' && $eve->id == $mujer->id && $eve->disponibilidad == 'Disponible' && $eve->eliminar == 'activo' && $eve->categoria == 'Blusas')
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
					<a href="{{action('UserMujerHomeController@edit',$eve['id'])}}" class="btn btn-success">Apartar</a>
				</div><br>
		        <p class="card-text" style="letter-spacing: 5px;"><small>Agregado: {{$eve->created_at}}</small></p>
		      </div>
		    </div>
		  </div>
		</div>
    </div>
 	@elseif($eve->genero == 'Mujer' && $eve->id>$mujer->id && $eve->disponibilidad == 'Disponible' && $eve->categoria == 'Blusas')
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
					<a href="{{action('UserMujerHomeController@edit',$eve['id'])}}" class="btn btn-success">Apartar</a>
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
  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br>


<h1 style="letter-spacing: 10px" align="center">Otros</h1><br>	

<div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">

  	@foreach($Articulo as $eve)
  		@foreach($Otros as $mujer)
	@if($eve->genero == 'Mujer' && $eve->id == $mujer->id && $eve->disponibilidad == 'Disponible' && $eve->eliminar == 'activo' && $eve->categoria == $mujer->categoria)
 	<li data-target="#carouselExampleIndicators3" data-slide-to="{{$eve->id}}" class="active"></li>
 	@elseif($eve->genero == 'Mujer' && $eve->id> $mujer->id && $eve->disponibilidad == 'Disponible' && $eve->eliminar == 'activo' && $eve->categoria == 'Accesarios' || $eve->categoria == 'Blazers' || $eve->categoria == 'Vestidos' || $eve->categoria == 'Faldas' || $eve->categoria == 'Abrigos' )
    <li data-target="#carouselExampleIndicators3" data-slide-to="{{$eve->id}}"></li>
  	@endif
		@endforeach
  @endforeach

  </ol>
  <div class="carousel-inner">
  	@foreach($Articulo as $eve)
  	  		@foreach($Otros as $mujer)

	@if($eve->genero == 'Mujer' && $eve->id == $mujer->id && $eve->disponibilidad == 'Disponible' && $eve->eliminar == 'activo' && $eve->categoria == $mujer->categoria)
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
					<a href="{{action('UserMujerHomeController@edit',$eve['id'])}}" class="btn btn-success">Apartar</a>
				</div><br>
		        <p class="card-text" style="letter-spacing: 5px;"><small>Agregado: {{$eve->created_at}}</small></p>
		      </div>
		    </div>
		  </div>
		</div>
    </div>
 	@elseif($eve->genero == 'Mujer' && $eve->id>$mujer->id && $eve->disponibilidad == 'Disponible' && $eve->eliminar == 'activo' && $eve->categoria == 'Accesarios' || $eve->categoria == 'Blazers' || $eve->categoria == 'Vestidos' || $eve->categoria == 'Faldas' || $eve->categoria == 'Abrigos')
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
					<a href="{{action('UserMujerHomeController@edit',$eve['id'])}}" class="btn btn-success">Apartar</a>
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
  <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br>



<h1 style="letter-spacing: 10px" align="center">Apartado</h1><br>




<div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">

  	@foreach($Articulo as $eve)
  		@foreach($ApartadoHombre as $apartado)
	@if($eve->disponibilidad == 'Apartado' && $eve->id == $apartado->id && $eve->genero == 'Mujer' )
 	<li data-target="#carouselExampleIndicators4" data-slide-to="{{$eve->id}}" class="active"></li>
 	@elseif($eve->disponibilidad == 'Apartado' && $eve->id> $apartado->id && $eve->genero == 'Mujer' )
    <li data-target="#carouselExampleIndicators4" data-slide-to="{{$eve->id}}"></li>
  	@endif
		@endforeach
  @endforeach

  </ol>
  <div class="carousel-inner">
  	@foreach($Articulo as $eve)
  	  		@foreach($ApartadoHombre as $apartado)

	@if($eve->disponibilidad == 'Apartado' && $eve->id == $apartado->id && $eve->genero == 'Mujer')
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
 	@elseif($eve->disponibilidad == 'Apartado' && $eve->id>$apartado->id && $eve->genero == 'Mujer')
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
  @endforeach

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br>

@endsection