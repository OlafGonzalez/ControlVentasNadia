<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<head>

	<title>Control de Ventas</title>
	<link rel="stylesheet" type="text/css" href="js/filtergrid.css" media="screen" />
	  <script type="text/javascript" src="js/tablefilter.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
	<a href="{{url('Agregar')}}" class="navbar-brand">Agregar Cliente</a>
	<a href="{{url('ListaCliente')}}" class="navbar-brand">Lista de clientes</a>
	<a href="{{url('Articulo')}}" class="navbar-brand">Hacer pedidos</a>
	<a href="{{url('PedidosPendientes')}}" class="navbar-brand">Todos los pedidos</a>
	<a href="{{url('Pagos')}}" class="navbar-brand">Agregar pago</a>
	<a class="navbar-brand" href="{{url('AgregarArticulo')}}">Agregar Articulo</a>


</nav>
		@yield('content')
	
</body>
<script>
	
	@yield('script')
	
</script>

</html>