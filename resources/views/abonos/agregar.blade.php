<!DOCTYPE html>
<html>
<head>
	<title>ABONOS</title>
</head>
<body>
<center>
<form action="{{ url('/abono')}}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
<label for="NoPago">{{'Número de pagos'}}</label>	
<input type="number" name="NoPago" id="NoPago" value="" placeholder="">
<br>

<label for="NoFactura">{{'Número de facturas'}}</label>	
<input type="number" name="NoFactura" id="NoFactura" value="">
<br>

<label for="cantidad">{{'Cantidad'}}</label>	
<input type="number" name="cantidad" id="cantidad" value="">
<br>

<label for="fecha">{{'Fecha'}}</label>	
<input type="text" name="fecha" id="fecha" value="">
<br>
<br>
<input type="submit" value="Agregar">
</form>
</center>
</body>
</html>