<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PACAS</title>
        <link rel="icon" type="image/x-icon" href="../img/HBR.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../bootstrap/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../img/HBR.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#pa">Pacas</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#agregar">Agregar</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
  <section class="resume-section" id="pa">
      <div class="resume-section-content">
      <h3 class="mb-0">Pacas</h3><td >Inicio (despliegue de datos)<a href="#agregar">Agregar</a> |
      <a href="http://localhost/Estadias/Myapp/public/inicio">Regresar</a></td>
      <table class="table table-dark">
  <thead style="background-color: #fff">
    <tr style="color: black ">
      <th scope="col">#</th>
      <th scope="col">Modulo</th>
      <th scope="col">Peso paca</th>
      <th scope="col">Lote</th>
      <th scope="col">Temporada</th>
      <th scope="col">Peso modulo</th>
      <th scope="col">Estatus liquidacion</th>
      <th scope="col">Clasificacion HBI</th>
      <th scope="col">Estatus comercializacion</th>
      <th scope="col">Acciones</th>
    </tr>

  <tbody style="background-color: #fff">
    @foreach($pacas as $pacas)
    <tr style="color: black">
      <td>{{$loop->iteration}}</td>
      <td>{{$pacas->modulo}}</td>
      <td>{{$pacas->peso_paca}}</td>
      <td>{{$pacas->lote}}</td>
      <td>{{$pacas->temporada}}</td>
      <td>{{$pacas->peso_modulo}}</td>
      <td>{{$pacas->estatus_liquidacion}}</td>
      <td>{{$pacas->clasificacion_HBI}}</td>
      <td>{{$pacas->estatus_comercializacion}}</td>
      <td>
        {{-- <a href="{{ url('/pacas/'.$pacas->id.'edit') }}">
          Editar
        </a>
 --}}
 <button class="btn btn-succes modificarboton" data-toggle="modal"  data-target="#ventanaModal"  valor="{{$pacas->id}}">Editar</button>

{{-- -MODAL-EDIT- --}}

<div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" arial-labelledby="TituloVentana" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 id="TituloVentana">Editar datos regisrados</h5>
  <button class="close" data-dismiss="modal" aria-label="Cerrar">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body" id="cuerpomodal">
</div>
<div class="modal-footer">
  <button class="btn-warning" type="button" data-dismiss="modal">
    Cerrar
  </button>

</form>


</div>
</div>
</div>
</div>

       |

        <form method="post" action="{{ url('/pacas/'.$pacas->id) }}">
        {{csrf_field()  }}
        {{ method_field('DELETE') }}
        <button type="submite" class="btn btn-outline-danger" style="color: black" onclick="return confirm('¿desea borrar?');">Borrar</button>
      </form>
      </td>

    </tr>
    @endforeach
  </tbody>


  </thead>
     </div>
      </table>
        </div>
      </section>




<hr class="m-0" />
            <!-- Experience-->
     <section class="resume-section" id="agregar">
      <div class="resume-section-content">
    <h3 class="mb-0">Agregar</h3>

<center>
    <form action="{{ url('/pacas')}}" method="POST">
      {{ csrf_field() }}
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
      <button type="submit" value="no" style="" class="btn btn-outline-danger" onclick="no()">Agregar</button>
    </form>
  </center>
        </div>
    </section>



        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="../resources/js/scripts.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
              $(".modificarboton").click(function(){
                var valor=$(this).attr("valor");
                var token=$("input[name='_token']").val();
                var url="{{ url('/pacas/'.$pacas->id) }}";
                 $.ajax({
                url: "funcionesjquery.php",
                type: "POST",
                dataType: "json",
                data: {jselector:'modificarpacas',jvalor:valor,jtoken:token,jurl:url}
                }).done(function(respuesta){
                 console.log(JSON.stringify(respuesta));
                if (respuesta.estado === "ok") {
                  $("#cuerpomodal").html(respuesta.cadena);
                }
              });
              })
          });
        </script>
    </body>
</html>
