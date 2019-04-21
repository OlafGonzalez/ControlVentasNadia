@extends('Plantillas.Menu')
@section('content')

 <h1 align="center">Nuevo Cliente</h1><br>

<div align="center" >
<form id="formulario" name="AgregarCliente" class="from-group" method="POST" action="NuevoCliente">
{{ csrf_field() }}
<div class="from-group col-md-3" align="center">
	<div class="from-group">
		<label>Nombre:</label>
		<input type="text" placeholder="Nombre" name="nom" required>
	</div><br>
	<div class="from-group">
		<label>Telefono:</label>
		<input type="number" placeholder="No. de telefono" name="tel" required>
	</div><br>
	<div class="from-group">
		<label>Correo:</label>
		<input type="email" placeholder="Correo" name="cor" required>
	</div>
</div><br>
 <div class="from-group">
  <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>
</div>
@endsection