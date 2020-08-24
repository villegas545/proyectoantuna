<form action="{{ url('/abono/'.$abono->id) }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
{{ method_field('PATCH') }}

<label >{{'Número de pago'}}</label>	
<input type="text" name="NoPago" id="NoPago" value="{{ $abono->NoPago }}">
<br/>

<label >{{'Número de factura'}}</label>	
<input type="text" name="NoFactura" id="NoFactura" value="{{ $abono->NoFactura }}">
<br/>

<label >{{'Cantidad'}}</label>	
<input type="text" name="cantidad" id="cantidad" value="{{ $abono->cantidad }}">
<br/>

<label >{{'Fecha'}}</label>	
<input type="text" name="fecha" id="fecha" value="{{ $abono->fecha }}">
<br/>

<input type="submit" value="Editar">
</form>