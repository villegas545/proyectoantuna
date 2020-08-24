<form action="{{ url('/comercializacion/'.$comercializacion->id) }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
{{ method_field('PATCH') }}

<label >{{'Numero de entrega'}}</label>	
<input type="text" name="no_entrega" id="no_entrega" value="{{ $comercializacion->no_entrega }}">
<br/>

<label >{{'Cliente'}}</label>	
<input type="text" name="cliente" id="cliente" value="{{ $comercializacion->cliente }}">
<br/>

<input type="submit" value="Editar">
</form>