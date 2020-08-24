<!DOCTYPE html>
<html>
<head>
	<title>TEMPORADAS</title>
</head>
<body>
<center>
	<form action="{{ url('/temporada')}}" method="POST">
			{{ csrf_field() }}
			<label>{{'Temporada'}}</label>
			<input type="text" name="temporadas" placeholder="ingrese la temporada">
			<br>
			<br>
			<button type="submit">Agregar</button>
			{{-- <a href="{{ url('temporada') }}">Regresar</a> --}}
		
	</form>
</center>
</body>
</html>
