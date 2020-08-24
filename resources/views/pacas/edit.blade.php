<form action="{{ url('/pacas/'.$pacas->id) }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
{{ method_field('PATCH') }}

<label >{{'Modulo'}}</label>	
<input type="text" name="modulo" id="modulo" value="{{ $pacas->modulo }}">
<br/>

<label >{{'Peso paca'}}</label>	
<input type="text" name="peso_paca" id="peso_paca" value="{{ $pacas->peso_paca }}">
<br/>

<label >{{'Lote'}}</label>	
<input type="text" name="lote" id="lote" value="{{ $pacas->lote }}">
<br/>

<label >{{'Temporada'}}</label>	
<input type="text" name="temporada" id="temporada" value="{{ $paca->temporada }}">
<br/>

<label >{{'Peso modulo'}}</label>	
<input type="email" name="peso_modulo" id="peso_modulo" value="{{ $pacas->peso_modulo }}">
<br/>

<label >{{'Estatus liquidacion'}}</label>	
<input type="text" name="estatus_liquidacion" id="estatus_liquidacion" value="{{ $pacas->estatus_liquidacion }}">
<br/>

<label >{{'Clasificacion HBI'}}</label>	
<input type="email" name="clasificacion_HBI" id="clasificacion_HBI" value="{{ $pacas->clasificacion_HBI }}">
<br/>

<label >{{'Estatus comercializacion'}}</label>	
<input type="email" name="estatus_comercializacion" id="estatus_comercializacion" value="{{ $pacas->estatus_comercializacion }}">
<br/>

<input type="submit" value="Editar">
</form>