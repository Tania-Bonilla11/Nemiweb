<?php 

$idLugar = $_POST['id'];

$conn = new mysqli('localhost', 'root', '', 'nemi_db');


      
            $sqlup = "DELETE FROM sugerencias WHERE id=$idLugar";
            $run_query=mysqli_query($conn,$sqlup);
    
            $mensaje = 'Se ha eliminado Correctamente';
 
    
 
    
        echo $mensaje;

?>