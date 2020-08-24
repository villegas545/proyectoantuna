Inicio (despliegue de datos)

<a href="{{ url('master/create') }}">Agregar</a>

<table class="table table-light">
	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Correo</th>
			<th>Acciones</th>
		</tr>
	</thead>


	<tbody>
		@foreach($master as $mas)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$mas->Nombre}}</td>
			<td>{{$mas->ApellidoPaterno}}</td>
			<td>{{$mas->ApellidoMaterno}}</td>
			<td>{{$mas->Correo}}</td>
			<td>
				<a href="{{ url('/master/'.$mas->id.'/edit') }}">
					Editar
				</a>


			 |

				<form method="post" action="{{ url('/master/'.$mas->id) }}">
				{{csrf_field()  }}
				{{ method_field('DELETE') }}
				<button type="submite" onclick="return confirm('¿desea borrar?');">Borrar</button>
			</form>
			</td>

		</tr>
		@endforeach
	</tbody>

</table>