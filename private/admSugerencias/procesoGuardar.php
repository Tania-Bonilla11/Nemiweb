<?php 

$idLugar = $_POST['id'];

$conn = new mysqli('localhost', 'root', '', 'nemi_db');

       $sql = "INSERT INTO lugares(nombre,descripcion,lat,ing,telefono,imagen) 
        select nombre,descripcion,lat,ing,telefono,imagen from sugerencias where id = '$idLugar'";
        $insetar = mysqli_query($conn,$sql);

        if($sql){
            $sqlup = "DELETE FROM sugerencias WHERE id=$idLugar";
            $run_query=mysqli_query($conn,$sqlup);
           $mensaje = 'El Lugar Se ha Publicado Correctamente';
        }else{
            $mensaje = 'No se pudo publicar';
        }
    
        echo $mensaje;

?>