@extends('Plantillas.Menu')
@section('content')
<h1 align="center">suma de dos numeros</h1><br>

<div  align="center" class="container">
	<label>Numero 1</label>
	<input type="number" id="num1" name="numero1"><br>
	<label>numero 2</label>
	<input type="number" id="num2" name="numero2"><br>

	<button onclick="suma();" class="btn btn-primary">+</button><br>
	<label id="result"></label>
</div> 

@endsection


@section('script')
function suma(){
		var num1 = document.getElementById("num1").value;
		var num2 = document.getElementById("num2").value;

		var resultado = parseFloat(num1) + parseFloat(num2);

		document.getElementById("result").textContent = "la suma es:"+resultado;
	}
	

	

@endsection