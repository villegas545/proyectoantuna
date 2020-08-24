<!DOCTYPE html>
<html>
<head>
	<title>LIQUIDACIONES</title>
</head>
<body>
<center>
		<form action="{{ url('liquidar')}}" method="POST">
			{{ csrf_field() }}
			
			<label>{{'Numero de liquidaciones'}}</label>
			<input type="text" name="no_liquidacion" placeholder="numero de liquidacion">
			<br>
			<label>{{'Fecha'}}</label>
			<input type="date" name="fecha" placeholder="escriba la fecha">
			<br>
			<label>{{'Precio de paca'}}</label>
			<input type="number" min="1" name="precio_paca" placeholder="precio de la paca">
			<br>
			<label>{{'Lote'}}</label>
			<input type="text" name="lote" placeholder="lote">
			<br>
			<br>
			<button type="submit">Agregar</button>
		</form>
	</center>
</body>
</html>