@extends('Plantillas.Menu')
@section('content')
<h1>Calcular valorers de una tabla</h1>


<table id="miTabla">
	<thead>
		<tr>
			<th>Producto</th>
			<th>Cantidad</th>
			<th>Importe</th>
			<th>Total</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="3">Total</td>
			<td></td>
		</tr>
	</tfoot>
	<tbody>
		<tr>
			<td>produco A</td>
			<td>2</td>
			<td>12.25</td>
			<td></td>
		</tr>
		<tr>
			<td>producto B</td>
			<td>1</td>
			<td>7.1</td>
			<td></td>
		</tr>
	</tbody>
</table>
<p>
	<button>Calcular</button>
</p>
@endsection