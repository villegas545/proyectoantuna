<!DOCTYPE html>
<html>
<head>
	<title>CLIENTES</title>
</head>
<body>
Apartado de clientes
<center>
		<form action="{{ url('/cliente')}}" method="POST">
			{{ csrf_field() }}
			<label>{{'Nombre'}}</label>
			<input type="text" name="nombre" placeholder="nombre del cliente">
			<br>
			<label>{{'Nombre de la empresa'}}</label>
			<input type="text" name="empresa" placeholder="nombre de la empresa">
			<br>
			<label>{{'Direccion del cliente'}}</label>
			<input type="text" name="direccion" placeholder="direccion del cliente">
			<br>
			<label>{{'Ciudad'}}</label>
			<input type="text" name="ciudad" placeholder="ciudad">
			<br>
			<label>{{'Colonia'}}</label>
			<input type="text" name="colonia" placeholder="colonia">
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
			<br>
			<button type="submit">Agregar</button>
		</form>
	</center>
</body>
</html>