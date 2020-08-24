<form action="{{ url('/productor/'.$productor->id) }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
{{ method_field('PATCH') }}

<label >{{'Nombre'}}</label>	
<input type="text" name="nombre" id="nombre" value="{{ $productor->nombre }}">
<br/>

<label >{{'RFC'}}</label>	
<input type="text" name="RFC" id="RFC" value="{{ $productor->RFC }}">
<br/>

<label >{{'Telefono de oficiona'}}</label>	
<input type="text" name="telefono_oficina" id="telefono_oficina" value="{{ $productor->telefono_oficina }}">
<br/>

<label >{{'Telefono celular'}}</label>	
<input type="text" name="telefono_celular" id="telefono_celular" value="{{ $productor->telefono_celular }}">
<br/>

<label >{{'Correo'}}</label>	
<input type="email" name="correo" id="correo" value="{{ $productor->correo }}">
<br/>

<label >{{'Tipo de contrato'}}</label>	
<input type="text" name="tipo_contrato" id="tipo_contrato" value="{{ $productor->tipo_contrato }}">
<br/>

<input type="submit" value="Editar">
|<a href="http://localhost/Estadias/Myapp/public/productor">Regresar</a>
</form>