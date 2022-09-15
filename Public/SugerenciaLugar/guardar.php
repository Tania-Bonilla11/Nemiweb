<?php

$conexion=new mysqli("localhost","root","","Nemi_db"); 

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$telefono = $_POST['telefono'];
$lat = $_POST['lat'];
$ing = $_POST['ing'];
$imagen = $_FILES['myfile'] ['name'];
$achivo = $_FILES['myfile'] ['tmp_name'];
$ruta = "../../private/gps/guardarLugar/img";

$ruta = $ruta."/".$imagen;

move_uploaded_file($achivo,$ruta);

if($lat[1] > 4){
    echo'
    <script type="text/javascript">
     alert("Lo sentimos por el momento Nemi solo registra lugares de la zona oriental de el Salvador");
     window.location.href="../paginaUsuario/index.php";;
     </script>';
}else{
    $query = "INSERT INTO sugerencias SET nombre='$nombre', descripcion='$descripcion', lat='$lat',ing='$ing',telefono='$telefono',imagen='$imagen'";
    $resultado = $conexion->query($query);
    
    if($resultado){
        echo'
    
        <script>
        alert("Gracias por compartir tus lugares con nemi");
        window.location.href="../paginaUsuario/index.php";
        </script>
        ';
    }else{
        echo'
          <script type="text/javascript">
           alert("No se pudo Agregar");
           window.location.href="../paginaUsuario/index.php";;
           </script>';
    }
}



?>