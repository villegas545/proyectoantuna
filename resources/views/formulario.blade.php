Apartado de registro
<form action="{{ url('/empleados')}}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
<label for="Nombre">{{'Nombre'}}</label>	
<input type="text" name="Nombre" id="Nombre" value="">

<input type="submit" value="Agregar">
</form>