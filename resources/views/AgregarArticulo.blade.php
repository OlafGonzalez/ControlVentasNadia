@extends('Plantillas.Menu')
@section('content')

<h1 align="center">Agregar Articulo</h1><br>

<div align="center" class="container">
	<form name="agregarArti" id="IDArticulo" class="from-group" method="POST" action="/nuevoArticulo">
		{{ csrf_field() }}
<div class="from-group col-md-4">
		<div class="from-group">
				<label>Nombre del Articulo:</label>
				<input type="text" name="NoArticulo" required>
			</div><br>
	<div class="from-group">
				<label>Precio Compra:</label>
				<input type="number" name="PCompra" required>
			</div><br>
<div class="from-group">
				<label>Id del producto:</label>
				<input type="text" name="idarticulo" required>
			</div><br>
		<div class="from-group">
				<label>Descripción:</label>
				
				<textarea name="descrip" required></textarea>
			</div><br>	
</div>
<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
</div>

@endsection