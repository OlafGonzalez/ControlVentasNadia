@extends('Plantillas.Menu')
@section('content')

<h1 align="center">Todos los pedidos</h1><br>

<div class="container">
	<table id="miTabla" class="table table_striped">
		<thead>
			<tr>
				<th>No.de pedido</th>
				<th>Precio de venta</th>
				<th>Inversión</th>
				<th>Ganancia por pedido</th>
				<th>Nombre del Articulo</th>
				<th>Cliente</th>
				<th>Fecha de Orden</th>
				<th>Identificsdor</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($pedidos as $pedido)
				
			<tr>
				<td>{{$pedido['id']}}</td>

				<td>{{$pedido['precio_venta']}}</td>

				@foreach($arti as $articulo)
				@if($articulo->id == $pedido->articulo_id)
				<td>{{$articulo['precio_compra']}}</td>
				@endif
				@endforeach
				<td></td>

				@foreach($arti as $articulo)
				@if($articulo->id == $pedido->articulo_id)
				<td>{{$articulo['nombreArticulo']}}</td>
				@endif
				@endforeach
				@foreach($us as $usuario)

				@if($pedido->usuario_id == $usuario->id)
				<td>{{$usuario->nombre}}</td>
				@endif
				@endforeach


				<td>{{$pedido['fecha_entrega']}}</td>

				@foreach($arti as $articulo)
				@if($articulo->id == $pedido->articulo_id)
				<td>{{$articulo['identificador']}}</td>
				@endif
				@endforeach
				
			</tr>
				
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<td>Total de Compras</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2">Total de inversión</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="3">Total de Ganacias</td>
				<td></td>
			</tr>
			
		</tfoot>
	</table>
	<p>
		<button class="btn btn-success">Calcular</button>
	</p>
</div>

@endsection


@section('script')
document.getElementsByTagName("button")[0].addEventListener("click",totalPedidos);


	/*

	function calcular(){
		var filas=document.querySelectorAll("#miTabla tbody tr");
		var total = 0;

		filas.forEach(function(e){
			var columnas = e.querySelectorAll("td");
			var cantidad = parseFloat(columnas[1].textContent);
			var importe = parseFloat(columnas[2].textContent);

			columnas[3].textContent=(cantidad*importe).toFixed(2);

			total+=cantidad*importe;

			var filas=document.querySelectorAll("#miTabla tfoot tr td");
			filas[1].textContent=total.toFixed(2);

		});
	}
*/
	function totalPedidos(){

		var filas=document.querySelectorAll("#miTabla tbody tr");
		
		var total = 0;
		var total1 = 0;
		var total2 = 0;
		filas.forEach(function(e){
			var columnas=e.querySelectorAll("td");
			
			var pVenta = parseFloat(columnas[1].textContent);
			var pCompra = parseFloat(columnas[2].textContent);



			columnas[3].textContent=(pVenta-pCompra).toFixed(2);


			total+=pVenta-pCompra;
			total1=total1+pVenta;
			total2=total2+pCompra;

			
		});

		var filas=document.querySelectorAll("#miTabla tfoot tr td");

		filas[5].textContent=total.toFixed(2);
		filas[3].textContent=total2.toFixed(2);
		filas[1].textContent=total1.toFixed(2);

	}
@endsection