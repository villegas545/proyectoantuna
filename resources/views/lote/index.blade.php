<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LOTE</title>
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
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#lo">Lote</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#agregar">Agregar</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="lo">
                <div class="resume-section-content">
                    <h3 class="mb-0"> Lotes ({{ $productor->nombre }})</h3><td >Inicio (despliegue de datos)<a href="#agregar">Agregar</a></td>              
                    <table class="table table-dark">
  <thead style="background-color: #fff">
    <tr style="color: black ">
      <th scope="col">#</th>
      <th scope="col">Lote</th>
      <th scope="col">Productor</th>
      <th scope="col">Dirección</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Localidad</th>
      <th scope="col">Acciones</th>
    </tr> 
  </thead>

  <tbody style="background-color: #fff">
    @foreach($datos as $lote)
    <tr style="color: black">
      <td>{{$loop->iteration}}</td>
      <td>{{$lote->lote}}</td>
      <td>{{$lote->productor}}</td>
      <td>{{$lote->direccion}}</td>
      <td>{{$lote->ciudad}}</td>
      <td>{{$lote->localidad}}</td>
      <td>
        <a href="{{ url('/lote/'.$lote->id.'/edit') }}">
          Editar
        </a>
<a class="nav-link js-scroll-trigger" href="../liquidar/{{ $lote->lote }}">Liquidaciones</a>


       |

        <form method="post" action="{{ url('/lote/'.$lote->id) }}">
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
    <form action="{{ url('/lote/')}}" method="POST">
      {{ csrf_field() }}
      <label style="color: black">{{'Lote'}}</label>
      <input type="number" style="width:30%;"class="form-control" min="1" name="lote" placeholder="lote">
      
 
      <input type="hidden" value="{{$id}}" style="width:30%;"class="form-control" name="productor" placeholder="nombre del productor">
      
      <label style="color: black">{{'Direccion'}}</label>
      <input type="text" style="width:30%;"class="form-control" name="direccion" placeholder="direccion">
      
      <label style="color: black">{{'Ciudad'}}</label>
      <input type="text" style="width:30%;"class="form-control" name="ciudad" placeholder="ciudad">

      <label style="color: black">{{'Localidad'}}</label>
      <input type="text" style="width:30%;"class="form-control" name="localidad" placeholder="localidad">
    
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
    </body>
</html>
