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
				<label>Precio Venta:</label>
				<input type="number" name="PVenta" required>
			</div><br>
	<div class="from-group">
				<label>Id del producto:</label>
				<input type="text" name="idarticulo" >
			</div><br>
	<div class="from-group">
				<label>Descripción:</label>
				
				<textarea name="descrip" ></textarea>
			</div><br>
	
 <form id="formname" name="formname" method="post" action="submitform.asp" >
<table width="50%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="41%" align="right" valign="middle">Género:</td>
    <td width="59%" align="left" valign="middle">
      <select name="category1" id="category1">
        <option value="">Seleccionar Género</option>
        <option value="Hombre">Hombre</option>
        <option value="Mujer">Mujer</option>
      </select>
    </td>
  </tr>
  <tr>
    <td align="right" valign="middle">Seleccionar:</td>
    <td align="left" valign="middle">
      <select disabled="disabled" class="subcat" id="category2" name="category2">
        <option value>Selecionar</option>
        <!-- Hombre -->
        <optgroup data-rel="Hombre">
          <option value="Playera">Playera</option>
          <option value="Camisas">Camisas</option>
          <option value="Accesarios">Accesarios</option>
          <option value="Pantalones">Pantalones</option>
        </optgroup>
        <!-- Mujer -->
        <optgroup data-rel="Mujer">
          <option value="Joyeria">Joyeria</option>
          <option value="Blusas">Blusas</option>
          <option value="Abrigos">Abrigos</option>
          <option value="Blazers">Blazers</option>
          <option value="Accesarios">Accesarios</option>
          <option value="Vestidos">Vestidos</option>
          <option value="Faldas">Faldas</option>

        </optgroup>
      
      </select>
    </td>
  </tr>
 
</table><br>	
	<div class="from-group">
				<label>Seleccionar archivo:</label>
				<input type="file" name="name" id="name">
	</div><br>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
</div>

@endsection


@section('script')



var $cat = $("#category1"),
    $subcat = $(".subcat");

var optgroups = {};

$subcat.each(function(i,v){
  var $e = $(v);
  var _id = $e.attr("id");
  optgroups[_id] = {};
  $e.find("optgroup").each(function(){
    var _r = $(this).data("rel");
    $(this).find("option").addClass("is-dyn");
    optgroups[_id][_r] = $(this).html();
  });
});
$subcat.find("optgroup").remove();

var _lastRel;
$cat.on("change",function(){
    var _rel = $(this).val();
    if(_lastRel === _rel) return true;
    _lastRel = _rel;
    $subcat.find("option").attr("style","");
    $subcat.val("");
    $subcat.find(".is-dyn").remove();
    if(!_rel) return $subcat.prop("disabled",true);
    $subcat.each(function(){
      var $el = $(this);
      var _id = $el.attr("id");
      $el.append(optgroups[_id][_rel]);
    });
    $subcat.prop("disabled",false);
});
@endsection