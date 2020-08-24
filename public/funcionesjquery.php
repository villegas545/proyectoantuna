<?php
//$_POST['jselector']="mostrarcalificaciones";
define("Servidor","localhost");
define("Usuario","root");
define("Contra","");
define("BD","estadias");

try {
    $conexion=mysqli_connect(Servidor,Usuario,Contra,BD);
} catch (Exception $e) {

}
switch ($_POST['jselector']) {

// --------------------------- Editar Temporadas --------------------------
    case "modificartemporada":
     $sql="SELECT * FROM temporadas WHERE id=".$_POST['jvalor'];
    $res=mysqli_query($conexion,$sql);
     $cadena="<form action='http://localhost/Estadias/Myapp/public/temporada/".$_POST['jvalor']."' method='POST'>";
     $filas=mysqli_fetch_array($res);
         $cadena=$cadena."
            <input type='hidden' name='_method' value='PATCH'>

            <input value='".$_POST['jtoken']."' type='hidden' name='_token'>
            <input value='".$filas['temporadas']."' type='text' name='temporadas'>
            <input type='submit' class='btn-warning' type='button' value='Editar'>
         ";


     $cadena=$cadena."
     </form>";

        $datos = array(
                    'estado' => 'ok',
                    'cadena' => $cadena,
                    'sql'=>$sql
                    );


	break;

// --------------------------- Editar Pacas -------------------------------


case "modificarpacas":
     $sql="SELECT * FROM pacas WHERE id=".$_POST['jvalor'];
    $res=mysqli_query($conexion,$sql);
     $cadena="<form action='http://localhost/Estadias/Myapp/public/pacas/".$_POST['jvalor']."' method='POST'>";
     $filas=mysqli_fetch_array($res);
         $cadena=$cadena."
            <input type='hidden' name='_method' value='PATCH'>

            <input value='".$_POST['jtoken']."' type='hidden' name='_token'>
            Modulo <input value='".$filas['modulo']."' type='text' name='modulo'>

            <input type='submit' class='btn-warning' type='button' value='Editar'>
         ";


     $cadena=$cadena."
     </form>";

        $datos = array(
                    'estado' => 'ok',
                    'cadena' => $cadena,
                    'sql'=>$sql
                    );


    break;

// --------------------------- Editar Productores -------------------------



     case "modificarProductor":
     $sql="SELECT * FROM productores WHERE id=".$_POST['jvalor'];
    $res=mysqli_query($conexion,$sql);
     $cadena="<form action='http://localhost/Estadias/Myapp/public/productor/".$_POST['jvalor']."' method='POST'>";
     $filas=mysqli_fetch_array($res);
         $cadena=$cadena."
            <input type='hidden' name='_method' value='PATCH'>

            <input value='".$_POST['jtoken']."' type='hidden' name='_token'>
            <p>
            Nombre <input value='".$filas['nombre']."' type='text' name='nombre'><br>
            RFC <input value='".$filas['RFC']."' type='text' name='RFC'><br>
            Telefono de oficina <input value='".$filas['telefono_oficina']."' type='text' name='telefono_oficina'><br>
            Telefono celular <input value='".$filas['telefono_celular']."' type='text' name='telefono_celular'><br>
            Correo <input value='".$filas['correo']."' type='text' name='correo'><br>
            Tipo de contrato <input value='".$filas['tipo_contrato']."' type='text' name='tipo_contrato'><br>
            </p>
             <br> <input type='submit' class='btn-warning' type='button' value='Editar'>
         ";


     $cadena=$cadena."
     </form>";

        $datos = array(
                    'estado' => 'ok',
                    'cadena' => $cadena,
                    'sql'=>$sql
                    );

// --------------------------- Editar Clientes ----------------------------
    break;
    case "modificarcliente":
     $sql="SELECT * FROM clientes WHERE id=".$_POST['jvalor'];
    $res=mysqli_query($conexion,$sql);
     $cadena="<form action='http://localhost/Estadias/Myapp/public/cliente/".$_POST['jvalor']."' method='POST'>";
     $filas=mysqli_fetch_array($res);
         $cadena=$cadena."
            <input type='hidden' name='_method' value='PATCH'>

            <input value='".$_POST['jtoken']."' type='hidden' name='_token'>
            Nombre <input value='".$filas['nombre']."' type='text' name='nombre'><br>
            Nombre de la empresa <input value='".$filas['empresa']."' type='text' name='empresa'><br>
            Direeccion del cliente <input value='".$filas['direccion']."' type='text' name='direccion'><br>
            Ciudad <input value='".$filas['ciudad']."' type='text' name='ciudad'><br>
            Colonia <input value='".$filas['colonia']."' type='text' name='colonia'><br>
            RFC <input value='".$filas['RFC']."' type='text' name='RFC'><br>
            Telefono oficina <input value='".$filas['telefono_oficina']."' type='text' name='telefono_oficina'><br>
            Telefono celular <input value='".$filas['telefono_celular']."' type='text' name='telefono_celular'><br>
            Correo <input value='".$filas['correo']."' type='text' name='correo'><br>

             <br> <input type='submit' class='btn-warning' type='button' value='Editar'>
         ";


     $cadena=$cadena."
     </form>";

        $datos = array(
                    'estado' => 'ok',
                    'cadena' => $cadena,
                    'sql'=>$sql
                    );


    break;

   // --------------------------- Editar Facturas -------------------------

case "modificarfactura":
     $sql="SELECT * FROM facturas WHERE id=".$_POST['jvalor'];
    $res=mysqli_query($conexion,$sql);
     $cadena="<form action='http://localhost/Estadias/Myapp/public/facturas/".$_POST['jvalor']."' method='POST'>";
     $filas=mysqli_fetch_array($res);
         $cadena=$cadena."
            <input type='hidden' name='_method' value='PATCH'>

            <input value='".$_POST['jtoken']."' type='hidden' name='_token'>
            Numero de factura<input value='".$filas['no_factura']."' type='text' name='no_factura'>
            Numero de liquidación<input value='".$filas['no_liquidacion']."' type='text' name='no_liquidacion'>
            Observaciones<input value='".$filas['observaciones']."' type='text' name='observaciones'>
            Estatus<input value='".$filas['estatus']."' type='text' name='estatus'>
            Total<input value='".$filas['total']."' type='text' name='total'>
            Debe<input value='".$filas['debe']."' type='text' name='debe'>

            <input type='submit' class='btn-warning' type='button' value='Editar'>
         ";


     $cadena=$cadena."
     </form>";

        $datos = array(
                    'estado' => 'ok',
                    'cadena' => $cadena,
                    'sql'=>$sql
                    );


    break;

 // --------------------------- Editar Comercializacion -------------------------

case "modificarcomercializacion":
     $sql="SELECT * FROM comercializacion WHERE id=".$_POST['jvalor'];
    $res=mysqli_query($conexion,$sql);
     $cadena="<form action='http://localhost/Estadias/Myapp/public/comercializacion/".$_POST['jvalor']."' method='POST'>";
     $filas=mysqli_fetch_array($res);
         $cadena=$cadena."
            <input type='hidden' name='_method' value='PATCH'>

            <input value='".$_POST['jtoken']."' type='hidden' name='_token'>

            Numero de entrega<input value='".$filas['no_entrega']."' type='text' name='no_entrega'><br>
            Cliente<input value='".$filas['cliente']."' type='text' name='cliente'>

            <input type='submit' class='btn-warning' type='button' value='Editar'>
         ";


     $cadena=$cadena."
     </form>";

        $datos = array(
                    'estado' => 'ok',
                    'cadena' => $cadena,
                    'sql'=>$sql
                    );


    break;



}




                //Seteamos el header de "content-type" como "JSON" para que jQuery lo reconozca como tal
				header('Content-Type: application/json');
				//Guardamos los datos en un array
				//Devolvemos el array pasado a JSON como objeto
				echo json_encode($datos, JSON_FORCE_OBJECT);

?>



