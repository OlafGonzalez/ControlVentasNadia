@extends('Plantillas.Menu')
@section('content')

<h1 align="center">Agregar Articulo</h1><br>

<div align="center" class="container">
	<form name="agregarArti" id="IDArticulo" class="from-group" method="POST" action="/nuevoArticulo" enctype="multipart/form-data">
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
				<input type="text" name="idarticulo" >
			</div><br>
	<div class="from-group">
				<label>Descripción:</label>
				
				<textarea name="descrip" ></textarea>
			</div><br>	
	<div class="from-group">
				<label>Seleccionar archivo:</label>
				<input type="file" name="name" id="name">
	</div><br>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
</div>

@endsection