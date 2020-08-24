<!DOCTYPE html>
<html>
<head>
	<title>FACTURAS</title>
</head>
<body>
<center>
		<form action="{{ url('/facturas')}}" method="POST">
			{{ csrf_field() }}
			<label>{{'Numero de factura'}}</label>
			<input type="text" name="no_factura" placeholder="numero de factura">
			<br>
			<label>{{'Numero de liquidacion'}}</label>
			<input type="text" name="no_liquidacion" placeholder="numero de liquidacion">
			<br>
			<label>{{'Observaciones'}}</label>
			<input type="text" name="observaciones" placeholder="observaciones">
			<br>
			<label>{{'Estatus'}}</label>
			<input type="text" name="estatus" placeholder="estatus">
			<br>
			<label>{{'Total'}}</label>
			<input type="text" name="total" placeholder="total">
			<br>
			<label>{{'Debe'}}</label>
			<input type="text" name="debe" placeholder="cantidad que debe">
			<br>
			<br>
			<button type="submit">Agregar</button>
		</form>
	</center>
</body>
</html>