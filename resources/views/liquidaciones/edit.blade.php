<form action="{{ url('/liquidar/'.$liquidar->no_liquidacion) }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
{{ method_field('PATCH') }}

<label >{{'Numero de liquidaciones'}}</label>	
<input type="text" name="no_liquidacion" value="{{ $liquidar->no_liquidacion }}">
<br/>

<label >{{'Fecha'}}</label>	
<input type="date" name="fecha"  value="{{ $liquidar->fecha }}">
<br/>

<label >{{'Precio de paca'}}</label>	
<input type="number" min="1" name="precio_paca"  value="{{ $liquidar->precio_paca }}">
<br/>

<label >{{'Lote'}}</label>	
<input type="text" name="lote"  value="{{ $liquidar->lote }}">
<br/>

<input type="submit" value="Editar">
</form>