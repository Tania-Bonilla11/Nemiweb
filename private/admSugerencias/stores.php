
const storeList = [
       <?php session_start(); 
        $conexion = new mysqli("localhost","root","","Nemi_db");
        $idUsuario = $_SESSION["id_usuario"];

        $query = "SELECT * FROM sugerencias";
        $resultado =$conexion->query($query);
          while($row = $resultado->fetch_assoc()){
        ?> 

    {
        "type": "Feature",
        "geometry": {
          "type": "Point",
          "coordinates": [<?php echo $row['ing'];?>,<?php echo $row['lat'];?>]
        },
        "properties": {
          "name": "<?php echo $row['nombre'];?>",
          "address": "<?php echo $row['descripcion'];?>",
          "phone": "<?php echo $row['telefono'];?>",
          "img": "<?php echo $row['imagen'];?>",
          "lat" : "<?php echo $row['lat'];?>",
           "id" : "<?php echo $row['id'];?>",
           "ing" : "<?php echo $row['ing'];?>"
        }
      },
   
      <?php  } ?>
]