@extends('Plantillas.Menu')
@section('content')
<h1 align="center">Editar Datos del Cliente</h1>

<div align="center" >
	<div class="conteiner">
		<form method="POST" action="{{action('ListarUsController@update',$id)}}">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="PATCH">
			<div>
				<div class="col-md-4">
					<div class="from-group col-md-4">
						<label>Nombre</label>
						<input type="text" name="nombre" value="{{$us->nombre}}">
					</div>
				</div>
			</div><br>
			

			<div>
				<div class="col-md-4">
					<div class="from-group col-md-4">
						<label>Telefono</label>
						<input type="number" name="telefono" value="{{$us->telefono}}">
					</div>
				</div>
			</div><br>

			<div>
				<div class="col-md-4">
					<div class="from-group col-md-4">
						<label>Correo</label>
						<input type="text" name="correo" value="{{$us->correo}}">
					</div>
				</div>
			</div><br>

			<div align="center">
				<div>
					<button type="submit" class="btn btn-success">Actualizar</button>
				</div>
			</div>
		</form>
	</div>
</div>

@endsection