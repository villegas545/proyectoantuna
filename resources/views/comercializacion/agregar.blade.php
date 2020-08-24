<!DOCTYPE html>
<html>
<head>
	<title>COMERCIALIZACION</title>
</head>
<body>
Apartado de comercialización
<center>
		<form action="{{ url('/comercializacion')}}" method="POST">
			{{ csrf_field() }}
			<label>{{'Numero de entrega'}}</label>
			<input type="text" name="no_entrega" placeholder="numero de entrega">
			<br>
			<label>{{'Cliente'}}</label>
			<input type="text" name="cliente" placeholder="Solo numeros">
			<br>
			<br>
			<button type="submit">Agregar</button>
		</form>
	</center>
</body>
</html>