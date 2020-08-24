<form action="{{ url('/temporada/'.$temporada->id) }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
{{ method_field('PATCH') }}

<label >{{'Temporada'}}</label>	
<input type="text" name="temporadas" id="temporadas" value="{{ $temporada->temporadas }}">
<br/>

<input type="submit" value="Editar">
</form>