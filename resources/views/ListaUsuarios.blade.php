@extends('Plantillas.Menu')
@section('content')

<div align="center">	
<h1>Lista de Clientes</h1>
</div><br>

<div class="container">
	<table class="table table_striped">
		<thead>
			<tr>
				<th>No.De cliente</th>
				<th>Nombre</th>
				<th>Telefono</th>
				<th colspan="3">Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($usuarios as $us)
			@if($us->eliminar == "activo")
			<tr>
				<td>{{$us['id']}}</td>
				<td>{{$us['nombre']}}</td>
				<td>{{$us['telefono']}}</td>
				<td><a href="{{action('ListarUsController@edit',$us['id'])}}" class="btn btn-warning">Modificar</a></td>
				<td>
					<form method="POST" action="{{action('ListarUsController@destroy',$us['id'])}}">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="DELETE">
					<button class="btn btn-danger" type="submit">Eliminar</button>	

					</form>
				</td>
				<td><a href="{{action('CuentaController@edit',$us['id'])}}" class="btn btn-info">Cuenta</a></td>
				@endif
			@endforeach
			</tr>
		</tbody>
	</table>
</div>



@endsection