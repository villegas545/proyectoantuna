<form action="{{ url('/master/'.$mas->id) }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
{{ method_field('PATCH') }}

<label for="Nombre">{{'Nombre'}}</label>	
<input type="text" name="Nombre" id="Nombre" value="{{ $mas->Nombre }}">
<br/>

<label for="ApellidoPaterno">{{'Apellido Paterno'}}</label>	
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ $mas->ApellidoPaterno }}">
<br/>

<label for="ApellidoMaterno">{{'Apellido Materno'}}</label>	
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ $mas->ApellidoMaterno }}">
<br/>

<label for="Correo">{{'Correo'}}</label>	
<input type="email" name="Correo" id="Correo" value="{{ $mas->Correo }}">
<br/>

<input type="submit" value="Editar">
</form>