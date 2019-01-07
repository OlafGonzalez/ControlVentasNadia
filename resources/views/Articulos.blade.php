@extends('Plantillas.Menu')
@section('content')

<h1 align="center">Agregar pedidos</h1><br>

<div align="center" class="container">
	<form name="Formulario" id="AgregarAID" class="from-group" method="POST" action="/nuevoPedido">
		{{ csrf_field() }}
		<div class="from-group col-md-4">
			<div class="from-group">
				<label>Nombre del Articulo:</label>
				<input type="text" name="NoArticulo" required>
			</div><br>
			<div class="from-group">
				<label>Nombre del cliente:</label>
				<select name="cliente" required>
					<option required>Nombre del cliente</option>
					@foreach($usuarios as $nom)
					@if($nom->eliminar == "activo")
					<option value="{{$nom['id']}}">{{$nom['nombre']}}</option>
					@endif
					@endforeach
				</select>
			</div><br>
			<div class="from-group">
				<label>Descripción:</label>
				<input type="text" name="descrip" required>
			</div><br>
			<div class="from-group">
				<label>Precio Compra:</label>
				<input type="number" name="PCompra" required>
			</div><br>
			<div class="from-group">
				<label>Precio Venta:</label>
				<input type="number" name="PVenta" required>
			</div><br>
			<div class="from-group">
				<label>Id del producto:</label>
				<input type="text" name="idarticulo" required>
			</div><br>
			<input type="hidden" name="fecha" value="<?php echo date("Y-m-d");?>">
	        <input type="hidden" name="hora" value="<?php echo date("H:i:s");?>">
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>

</div>


@endsection