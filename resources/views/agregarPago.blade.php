@extends('Plantillas.Menu')
@section('content')
<h1 align="center">Agregar pago</h1><br>

<div align="center">
	<form class="from-group" method="POST" action="/nuevoPago">
		{{ csrf_field() }}
		<div class="from-group col-md-4">
			<div class="from-group">
				<label>Nombre del Cliente</label>
				<select name="cliente" required>
					<option required>Nombre del cliente</option>
					@foreach($usuarios as $nom)
					@if($nom->eliminar == "activo")
					<option value="{{$nom['id']}}">{{$nom['nombre']}}</option>
					@endif
					@endforeach
				</select>	
			</div><br>
		</div>
		<div class="from-group col-md-4">
			<div class="from-group">
				<label>Cantidad del pago</label>
				<input type="number" min="1" step=".1" name="pago" required>
			</div>
		</div><br>
		<input type="hidden" name="fecha" value="<?php echo date("Y-m-d");?>">
	    <input type="hidden" name="hora" value="<?php echo date("H:i:s");?>">
		 <div class="from-group">
  <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
	</form>
</div>
@endsection