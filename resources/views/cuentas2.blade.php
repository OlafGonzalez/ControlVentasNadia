@extends('Plantillas.Menu')
@section('content')

<h1 align="center">Cuenta de {{$usuarios->nombre}}</h1>


<div class="container">
	<table id="miTabla" class="table table_striped">
		<thead>
			<tr>
				<th>No.de pedido</th>
				<th>Precio de venta</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pedidos as $pedido)
			@if($pedido->usuario_id == $usuarios->id)
			<tr>
				<td>{{$pedido['id']}}</td>
				<td>{{$pedido['precio_venta']}}</td>
			</tr>
			@endif
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<th>TOTAL</th>
				<td></td>
			</tr>
		</tfoot>
	</table>


	<table id="miTabla2" class="table table_striped">
		<thead>
			<tr>
				<th>No. de cuenta</th>
				<th>pagos</th>
				<th>Fecha del pago</th>
				<th>Hora del pago</th>
			</tr>
		</thead>
		<tbody>
				@foreach($cuenta as $cue)
				@if($cue->usuario_id == $usuarios->id)
			<tr>
				
				<td>{{$cue['id']}}</td>
				<td>{{$cue['pagos']}}</td>
				<td>{{$cue['fecha_entrega']}}</td>
				<td>{{$cue['hora_entrega']}}</td>
			</tr>
				@endif
				@endforeach
		</tbody>
		<tfoot>
			<tr>
				<th>TOTAL</th>
				<td></td>
			</tr>
		</tfoot>
	</table>
	<div class="container">
		
<h4>Restante:</h4>
<h2 id="tld"></h2>
	</div>
<p>
	<button class="btn btn-success">Calcular</button>
</p>


</div>


@endsection

@section('script')



	function cuenta(){
		var filas=document.querySelectorAll("#miTabla tbody tr");

		var to = 0;

		filas.forEach(function(e){
			var columnas=e.querySelectorAll("td");
			var venta = parseFloat(columnas[1].textContent);
			to=to+venta;
		});
		var filas2=document.querySelectorAll("#miTabla tfoot tr td");
		filas2[0].textContent=to.toFixed(2);

	
	var filas3=document.querySelectorAll("#miTabla2 tbody tr");

		var to2 = 0;

		filas3.forEach(function(e){
			var columnas=e.querySelectorAll("td");
			var venta1 = parseFloat(columnas[1].textContent);
			to2=to2+venta1;
		});
		var filas2=document.querySelectorAll("#miTabla2 tfoot tr td");
		filas2[0].textContent=to2.toFixed(2);

		var Residuo = document.querySelectorAll("#tld");

		Residuo[0].textContent=(to-to2).toFixed(2);
	}

	
	document.getElementsByTagName("button")[0].addEventListener("click",cuenta);

@endsection