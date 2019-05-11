@extends('Plantillas.Menu')
@section('content')

<br><h1 align="center">Todos los articulos</h1><br>
<h3 align="center">Disponible</h3>

<div class="container">
<div class="row">
@foreach ($Articulo as $arti)
@if($arti->disponibilidad == 'Disponible' && $arti->eliminar == 'activo')
<div class="col-sm">
<div class="card text-center" style="width: 18rem; margin-top: 70px">
<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$arti->foto}}" width="150" height="150" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><strong>Nombre: </strong>{{$arti->nombreArticulo}}</h5>
    <p class="card-text"><strong>Descripción</strong><br>{{$arti->descripcion}}</p>
    <p class="card-text"><strong>Precio Compra:$</strong>{{$arti->precio_compra}}</p>
    <p class="card-text"><strong>Precio Venta:$</strong>{{$arti->precio_venta}}</p>
    <p class="card-text"><strong>Identificador: </strong> {{$arti->identificador}}</p>

    <form action="{{action('AgregarArticuloController@destroy', $arti['id'])}}" method="POST">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Eliminar</button>
    </form><br>
    <a href="{{action('AgregarArticuloController@edit', $arti['id'])}}" class="btn btn-warning">Modificar</a>
    <a href="{{action('ArticuloController@edit', $arti['id'])}}" class="btn btn-info">Apartado</a>

    </div>
  </div>
</div>
@endif
@endforeach
</div>

</div><br>

<h3 align="center">Apartado</h3>

<div class="container">
<div class="row">
@foreach ($Articulo as $arti)
@if($arti->disponibilidad == 'Apartado' && $arti->eliminar == 'activo')

<div class="col-sm">
<div class="card text-center" style="width: 18rem; margin-top: 70px">
<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$arti->foto}}" width="150" height="150" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><strong>Nombre: </strong>{{$arti->nombreArticulo}}</h5>
    <p class="card-text"><strong>Descripción</strong><br>{{$arti->descripcion}}</p>
    <p class="card-text"><strong>Precio Compra:$</strong>{{$arti->precio_compra}}</p>
    <p class="card-text"><strong>Precio Venta:$</strong>{{$arti->precio_venta}}</p>
    <p class="card-text"><strong>Identificador: </strong> {{$arti->identificador}}</p>

    <form action="{{action('AgregarArticuloController@destroy', $arti['id'])}}" method="POST">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Eliminar</button>
    </form><br>
    <a href="{{action('AgregarArticuloController@edit', $arti['id'])}}" class="btn btn-warning">Modificar</a>
    <a href="{{action('ApartadoController@edit', $arti['id'])}}" class="btn btn-info">Disponible</a>

    </div>
  </div>
</div>
@endif
@endforeach
</div>

</div>

@endsection