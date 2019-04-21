@extends('Plantillas.Menu')
@section('content')

<h1 align="center">Editar producto</h1>

<div class="container" align="center">
	<form method="POST" action="{{action('AgregarArticuloController@update',$id)}}">
		{{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">
		<div class="from-group col-md-4">
		<div class="from-group">
				<label>Nombre del Articulo:</label>
				<input type="text" name="NoArticulo" value="{{$articulo->nombreArticulo}}" required>
			</div><br>
	<div class="from-group">
				<label>Precio Compra:</label>
				<input type="number" name="PCompra" value="{{$articulo->precio_compra}}" required>
			</div><br>
	<div class="from-group">
				<label>Id del producto:</label>
				<input type="text" name="idarticulo" value="{{$articulo->identificador}}" required>
			</div><br>	
	
</div>


 <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button>

	</form>
</div>


@endsection