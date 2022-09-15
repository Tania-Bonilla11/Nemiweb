<?php

$conexion=new mysqli("localhost","root","","Nemi_db"); 

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$telefono = $_POST['telefono'];
$lat = $_POST['lat'];
$ing = $_POST['ing'];
$imagen = $_FILES['myfile'] ['name'];
$achivo = $_FILES['myfile'] ['tmp_name'];
$ruta = "img";
date_default_timezone_set('America/El_salvador'); 
$fechaActual = date('d-m-Y');
$ruta = $ruta."/".$imagen;

move_uploaded_file($achivo,$ruta);



$query = "INSERT INTO lugares SET nombre='$nombre', descripcion='$descripcion', lat='$lat',ing='$ing',telefono='$telefono',fecha ='$fechaActual',imagen='$imagen'";
    $resultado = $conexion->query($query);
    
    if($resultado){
        echo'
    
        <script>
        alert("Se agrego correctamente");
        window.location.href="../../../Public/paginaUsuario/index.php";
        </script>
        ';
    }else{
        echo'
          <script type="text/javascript">
           alert("No se pudo Agregar");
           window.location.href="../../../Public/paginaUsuario/index.php";
           </script>';
    }

?>