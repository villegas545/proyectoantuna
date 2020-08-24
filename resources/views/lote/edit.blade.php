<form action="{{ url('/lote/'.$lote->id) }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
{{ method_field('PATCH') }}

<label >{{'Lote'}}</label>	
<input type="text" name="lote" id="lote" value="{{ $lote->lote }}">
<br/>

<label >{{'Nombre del productor'}}</label>	
<input type="text" name="productor" id="productor" value="{{ $lote->productor }}">
<br/>

<label >{{'Direccion'}}</label>	
<input type="text" name="direccion" id="direccion" value="{{ $lote->direccion }}">
<br/>

<label >{{'Ciudad'}}</label>	
<input type="text" name="ciudad" id="ciudad" value="{{ $lote->ciudad }}">
<br/>

<label >{{'Localidad'}}</label>	
<input type="text" name="localidad" id="localidad" value="{{ $lote->localidad }}">
<br/>

<input type="submit" value="Editar">
</form>