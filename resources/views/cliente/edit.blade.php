<form action="{{ url('/cliente/'.$cliente->id) }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
{{ method_field('PATCH') }}

<label >{{'Nombre'}}</label>	
<input type="text" name="nombre" id="nombre" value="{{ $cliente->nombre }}">
<br/>

<label >{{'Nombre de la empresa'}}</label>	
<input type="text" name="empresa" id="empresa" value="{{ $cliente->empresa }}">
<br/>

<label >{{'Direccion del cliente'}}</label>	
<input type="text" name="direccion" id="direccion" value="{{ $cliente->direccion }}">
<br/>

<label >{{'Ciudad'}}</label>	
<input type="text" name="ciudad" id="ciudad" value="{{ $cliente->ciudad }}">
<br/>

<label >{{'Colonia'}}</label>	
<input type="text" name="colonia" id="colonia" value="{{ $cliente->colonia }}">
<br/>

<label >{{'RFC'}}</label>	
<input type="text" name="RFC" id="RFC" value="{{ $cliente->RFC }}">
<br/>

<label >{{'Telefono de oficiona'}}</label>	
<input type="text" name="telefono_oficina" id="telefono_oficina" value="{{ $cliente->telefono_oficina }}">
<br/>

<label >{{'Telefono celular'}}</label>	
<input type="text" name="telefono_celular" id="telefono_celular" value="{{ $cliente->telefono_celular }}">
<br/>

<label >{{'Correo'}}</label>	
<input type="email" name="correo" id="correo" value="{{ $cliente->correo }}">
<br/>

<input type="submit" value="Editar">
</form>