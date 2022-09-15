<?php

$conexion=new mysqli("localhost","root","","Nemi_db"); 

$id = $_REQUEST['id'];

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$telefono = $_POST['telefono'];
$lat = $_POST['lat'];
$ing = $_POST['ing'];
$imagen = $_FILES['myfile'] ['name'];
$achivo = $_FILES['myfile'] ['tmp_name'];
$ruta = "../guardarLugar/img";
date_default_timezone_set('America/El_salvador'); 
$fechaActual = date('d-m-Y');

$ruta = $ruta."/".$imagen;
move_uploaded_file($achivo,$ruta);



$queryI = "SELECT * FROM lugares WHERE id ='$id'";
$resultadoI =$conexion->query($queryI);
$row = $resultadoI->fetch_assoc();
 
if($imagen == ''){

  $imagen = $row['imagen'];
}else{
    $imagen = $imagen;
}

if($ing  == ''){
    $lat = $row['lat'];
    $ing  = $row['ing'];
  }else{
      $ing  = $ing;
      $lat  = $lat;
  }



    $query = "UPDATE lugares SET nombre='$nombre', descripcion='$descripcion', lat='$lat',ing='$ing',telefono='$telefono',fecha='$fechaActual',imagen='$imagen' WHERE id='$id'";
    $resultado = $conexion->query($query);
    
    if($resultado){
        echo'
    
        <script>
        alert("Se ha modificado correctamente");
        window.location.href="../index.php";
        </script>
        ';
    }else{
        echo'
          <script type="text/javascript">
           alert("No se pudo Modificar");
           window.location.href="../index.php";
           </script>';
    }

?>




