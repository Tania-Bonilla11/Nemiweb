<?php

$conexion=new mysqli("localhost","root","","Nemi_db"); 

$id = $_REQUEST['id'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$imagen = $_FILES['myfile'] ['name'];
$achivo = $_FILES['myfile'] ['tmp_name'];
$ruta = "img";

$ruta = $ruta."/".$imagen;

move_uploaded_file($achivo,$ruta);


$sql = "SELECT * FROM usuarios WHERE id='$id'";
$result = $conexion->query($sql);

$row = $result->fetch_assoc();




if($imagen == ''){

  $imagen = $row['imagen'];

}else{

    $imagen = $imagen;
    
}

$query = "UPDATE usuarios SET usuario='$usuario', nombre='$nombre', imagen='$imagen' WHERE id ='$id'";
    $resultado = $conexion->query($query);
    
    if($resultado){
        echo'
    
        <script>
        alert("Se agrego correctamente");
        window.location.href="index.php";
        </script>
        ';
    }else{
        echo'
          <script type="text/javascript">
           alert("No se pudo");
           window.location.href="index.php";
           </script>';
    }

?>