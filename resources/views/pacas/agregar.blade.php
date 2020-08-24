<!DOCTYPE html>
<html>
<head>
	<title>PACAS</title>
</head>
<body>
<center>
		<form action="{{ url('/pacas')}}" method="POST">
			{{ csrf_field() }}
			{{-- <label>{{'Id'}}</label>
			<input type="number" min="1" name="id" placeholder="id">
			<br> --}}
			{{-- <label>{{'Numero de paca'}}</label>
			<input type="text" name="no_paca" placeholder="numero de paca">
			<br> --}}
			<label>{{'Modulo'}}</label>
			<input type="text" name="modulo" placeholder="modulo">
			<br>
			<label>{{'Peso paca'}}</label>
			<input type="number" name="peso_paca" placeholder="peso paca">
			<br>
			<label>{{'Lote'}}</label>
			<input type="text" name="lote" placeholder="lote">
			<br>
			<label>{{'Temporada'}}</label>
			<input type="text" name="temporada" placeholder="temporada">
			<br>
			<label>{{'Peso modulo'}}</label>
			<input type="text" name="peso_modulo" placeholder="peso modulo">
			<br>
			<label>{{'Estatus liquidacion'}}</label>
			<input type="text" name="estatus_liquidacion" placeholder="estatus liquidacion">
			<br>
			<label>{{'Clasificacion HBI'}}</label>
			<input type="text" name="clasificacion_HBI" placeholder="clasificacion HBI">
			<br>
			<label>{{'Estatus comercializacion'}}</label>
			<input type="text" name="estatus_comercializacion" placeholder="estatus comercializacion">
			<br>
			<br>
			<button type="submit">Agregar</button>
		</form>
	</center>
</body>
</html>