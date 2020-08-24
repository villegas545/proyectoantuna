<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CLIENTE</title>
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
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#cli">Cliente</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#agregar">Agregar</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="cli">
                <div class="resume-section-content">
                    <h3 class="mb-0"> Cliente</h3><td >Inicio (despliegue de datos)<a href="{{-- {{ url('productor/agregar') }} --}}#agregar">Agregar</a> |
                      <a href="http://localhost/Estadias/Myapp/public/inicio">Regresar</a></td>              
                    <table class="table table-dark">
  <thead style="background-color: #fff">
    <tr style="color: black ">
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Empresa</th>
      <th scope="col">Direccion</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Colonia</th>
      <th scope="col">RFC</th>
      <th scope="col">Telefono de oficina</th>
      <th scope="col">Telefono celular</th>
      <th scope="col">Correo</th>

      <th scope="col">Acciones</th>
    </tr> 
  </thead>

<tbody style="background-color: #fff">
    @foreach($cliente as $cliente)
    <tr style="color: black ">
      <td>{{$loop->iteration}}</td>
      <td>{{$cliente->nombre}}</td>
      <td>{{$cliente->empresa}}</td>
      <td>{{$cliente->direccion}}</td>
      <td>{{$cliente->ciudad}}</td>
      <td>{{$cliente->colonia}}</td>
      <td>{{$cliente->RFC}}</td>
      <td>{{$cliente->telefono_oficina}}</td>
      <td>{{$cliente->telefono_celular}}</td>
      <td>{{$cliente->correo}}</td>
      <td>
        {{-- <a href="{{ url('/cliente/'.$cliente->id.'/edit') }}">
          Editar
        </a> --}}
<button class="btn btn-succes" data-toggle="modal"  data-target="#ventanaModal" id="modificarboton" valor="{{$cliente->id}}">Editar</button>

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
 
  <button class="btn btn-succes" type="button"></button>
</div>
</div>
</div>
</div>


       |

        <form method="post" action="{{ url('/cliente/'.$cliente->id) }}">
        {{csrf_field()  }}
        {{ method_field('DELETE') }}
        <button type="submite" class="btn btn-outline-danger" style="color: black" onclick="return confirm('¿desea borrar?');">Borrar</button>
      </form>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>

     </div>
            </section>
        <hr class="m-0" />
            <!-- Experience-->
     <section class="resume-section" id="agregar">
      <div class="resume-section-content">
    <h3 class="mb-0">Agregar</h3>
    
<center>
    <form action="{{ url('/cliente')}}" method="POST">
      {{ csrf_field() }}
      <label style="color: black">{{'Nombre'}}</label>
      <input type="text" style="width:30%;"class="form-control" name="nombre" placeholder="nombre del cliente">
      
      <label style="color: black">{{'Nombre de la empresa'}}</label>
      <input type="text" style="width:30%;"class="form-control" name="empresa" placeholder="nombre de la empresa">
      
      <label style="color: black">{{'Direccion del cliente'}}</label>
      <input type="text" style="width:30%;"class="form-control" name="direccion" placeholder="direccion del cliente">
      
      <label style="color: black">{{'Ciudad'}}</label>
      <input type="text" style="width:30%;"class="form-control" name="ciudad" placeholder="ciudad">
      
      <label style="color: black">{{'Colonia'}}</label>
      <input type="text" style="width:30%;"class="form-control" name="colonia" placeholder="colonia">
      
      <label style="color: black">{{'RFC'}}</label>
      <input type="text" style="width:30%;"class="form-control" name="RFC" placeholder="escriba el RFC">
      
      <label style="color: black">{{'Telefono de oficiona'}}</label>
      <input type="text" style="width:30%;"class="form-control" name="telefono_oficina" placeholder="telefono de oficina">
      
      <label style="color: black">{{'Telefono celular'}}</label>
      <input type="text" style="width:30%;"class="form-control" name="telefono_celular" placeholder="telefono celular">
      
      <label style="color: black">{{'Correo'}}</label>
      <input type="email" style="width:30%;"class="form-control" name="correo" placeholder="escriba su Correo">
      
      <br>
      <button type="submit" class="btn btn-outline-danger" style="color: black">Agregar</button>
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
          // $(document).on("click", ".Editar", function(){
          //   fila = $(this).closest("tr");
          //   id = parseInt(fila.find('td:eq(0)').text());
          //   alert(id);
          // });
          $(document).ready(function(){
              $("#modificarboton").click(function(){
                var valor=$(this).attr("valor");
                var token=$("input[name='_token']").val();
                var url="{{ url('/cliente/'.$cliente->id) }}";
                 $.ajax({
                url: "funcionesjquery.php",
                type: "POST",
                dataType: "json",
                data: {jselector:'modificarcliente',jvalor:valor,jtoken:token,jurl:url}
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
