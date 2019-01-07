@extends('Plantillas.Menu')
@section('content')

<h1 align="center">Cuentas</h1><br>


<div class="container">
		<label>Buscador:</label>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres..">
</div>

<div class="container">
	
<div class="container">

	

	<br><table id="miTabla" class="table table_striped">
		<thead>
			<tr>
				<th>No.de pedido</th>
				<th>Precio de venta</th>
				<th>Nombre del cliente</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pedidos as $pedido)
			<tr>
				<td >{{$pedido['id']}}</td>
				<td>{{$pedido['precio_venta']}}</td>
				@foreach($us as $usuario)
				@if($usuario->id == $pedido ->usuario_id)
				<td>{{$usuario['nombre']}}</td>
				@endif	
				@endforeach

			</tr>
			@endforeach
					</tbody>
		<tfoot>
			<tr>
				<td>Total</td>
				<td></td>
			</tr>
		</tfoot>
	</table>
</div>

<div class="container">
	
		<table id="miTabla2" class="table table_striped" >
			
			<thead>
				<tr>
				<th>No. de pago</th>
				<th>Pagos</th>
				<th>Nombre del cliente</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cuenta as $cue)
			<tr>
				<td>{{$cue['id']}}</td>
				<td>{{$cue['pagos']}}</td>
				@foreach($us as $usuario)
				@if($usuario->id == $cue->id)
				<td>{{$usuario['nombre']}}</td>
				@endif	
				@endforeach
			</tr>
			@endforeach
			</tbody>
		</table>
</div>
		</div>
<div class="container">	
	<p>
		<button class="btn btn-success">Calcular</button>
	</p>
</div>



@endsection

@section('script')



document.getElementsByTagName("button")[0].addEventListener("click",totalCuenta);

function totalCuenta(){

	var filas=document.querySelectorAll("#miTabla tbody tr");

var total = 0;



filas.forEach(function(e){
			var columnas=e.querySelectorAll("td");
			var pVenta = parseFloat(columnas[1].textContent);
			total=total+pVenta;
		});
		var filas2=document.querySelectorAll("#miTabla tfoot tr td");
		filas2[1].textContent=total.toFixed(2);
}


function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("miTabla");
  table2 = document.getElementById("miTabla2");
  tr = table.getElementsByTagName("tr");
  tr2 = table2.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }

 for (i = 0; i < tr2.length; i++) {
    td2 = tr2[i].getElementsByTagName("td")[2];
    if (td2) {
      txtValue = td2.textContent || td2.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr2[i].style.display = "";
      } else {
        tr2[i].style.display = "none";
      }
    } 
  }

}

@endsection