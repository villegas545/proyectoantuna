<!DOCTYPE html>
<html>
<head>
	<title>PRODUCTOR</title>
</head>
<body>
<center>
		<form action="{{ url('/productor')}}" method="POST">
			{{ csrf_field() }}
			{{-- <label>{{'Id'}}</label>
			<input type="number" min="1" name="id" placeholder="id">
			<br> --}}
			<label>{{'Nombre'}}</label>
			<input type="text" name="nombre" placeholder="nombre del productor">
			<br>
			<label>{{'RFC'}}</label>
			<input type="text" name="RFC" placeholder="escriba el RFC">
			<br>
			<label>{{'Telefono de oficiona'}}</label>
			<input type="text" name="telefono_oficina" placeholder="telefono de oficina">
			<br>
			<label>{{'Telefono celular'}}</label>
			<input type="text" name="telefono_celular" placeholder="telefono celular">
			<br>
			<label>{{'Correo'}}</label>
			<input type="email" name="correo" placeholder="escriba su Correo">
			<br>
			<label>{{'Tipo de contrato'}}</label>
			<input type="text" name="tipo_contrato" placeholder="escriba el tipo de contrato">
			<br>
			<br>
			<button type="submit">Agregar</button>
		</form>
	</center>
</body>
</html>