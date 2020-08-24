<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>LOTE</title>
</head>
<body>
	<center>
		<form action="{{ url('/lote')}}" method="POST">
			{{ csrf_field() }}
			<label>{{'Lote'}}</label>
			<input type="number" min="1" name="lote" placeholder="lote">
			<br>
			<label>{{'Id del productor'}}</label>
			<input type="number" name="productor" placeholder="Id del productor">
			<br>
			<label>{{'Direccion'}}</label>
			<input type="text" name="direccion" placeholder="direccion">
			<br>
			<label>{{'Ciudad'}}</label>
			<input type="text" name="ciudad" placeholder="ciudad">
			<br>
			<label>{{'Localidad'}}</label>
			<input type="text" name="localidad" placeholder="localidad">
			<br>
			<br>
			<button type="submit">Agregar</button>
		</form>
	</center>
</body>
</html>