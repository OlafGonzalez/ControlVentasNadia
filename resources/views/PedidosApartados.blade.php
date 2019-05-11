@extends('Plantillas.Menu')
@section('content')
<h1 align="center">Pedidos Apartados</h1><br>

<div class="container">
	<table id="myTable" class="table table_striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Articulo</th>
				<th colspan="2">Acción</th>
			</tr>
		</thead>
		<tbody>
			@foreach($apartado as $apart)
			
				<tr>
					@foreach($user as $us)
						@if($apart->usuario_id == $us->id)
						<td value="{{$us->id}}">{{$us->name}}</td>

						@endif
					@endforeach
					@foreach($articulo as $arti)
					
					@if($apart->articulo_id == $arti->id)
						<td>{{$arti->nombreArticulo}}</td>

						@endif
					@endforeach

				<td>
					<form method="POST" action="/nuevoPedido">
					{{ csrf_field() }}
					<button class="btn btn-success" type="submit">Agregar</button>	
					<input type="hidden" name="fecha" value="<?php echo date("Y-m-d");?>">
	       			<input type="hidden" name="hora" value="<?php echo date("H:i:s");?>">
					<input type="hidden" name="NoArticulo" value="{{$apart->articulo_id}}">
					<input type="hidden" name="cliente" value="{{$apart->usuario_id}}">

	       			</form>
				</td>
				<td>
					<form method="POST" action="{{action('ApartadoController@destroy',$apart['id'])}}">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="DELETE">
					<button class="btn btn-danger" type="submit">Eliminar</button>	
	
				</td>
				</tr>	
					</form>
				

			@endforeach
			
		</tbody>
	</table>
</div>
@endsection