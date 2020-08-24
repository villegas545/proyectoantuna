<form action="{{ url('/facturas/'.$facturas->id) }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
{{ method_field('PATCH') }}

<label >{{'Numero de factura'}}</label>	
<input type="text" name="no_factura" id="no_factura" value="{{ $facturas->no_factura }}">
<br/>

<label >{{'Numero de liquidacion'}}</label>	
<input type="text" name="no_liquidacion" id="no_liquidacion" value="{{ $facturas->no_liquidacion }}">
<br/>

<label >{{'Observaciones'}}</label>	
<input type="text" name="observaciones" id="observaciones" value="{{ $facturas->observaciones }}">
<br/>

<label >{{'Estatus'}}</label>	
<input type="text" name="estatus" id="estatus" value="{{ $facturas->estatus }}">
<br/>

<label >{{'Total'}}</label>	
<input type="text" name="total" id="total" value="{{ $facturas->total }}">
<br/>

<label >{{'Debe'}}</label>	
<input type="text" name="debe" id="debe" value="{{ $facturas->debe }}">
<br/>

<input type="submit" value="Editar">
</form>