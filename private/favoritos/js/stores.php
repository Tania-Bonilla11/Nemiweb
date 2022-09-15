

const storeList = [
    <?php session_start(); 
        $conexion = new mysqli("localhost","root","","Nemi_db"); 
        $idUsuario = $_SESSION["id_usuario"];
    $query = "SELECT * FROM fav WHERE idUsuario = $idUsuario";
    $resultado =$conexion->query($query);
      while($row = $resultado->fetch_assoc()){
        $idLugar = $row['idLugar'];
        $query2 = "SELECT * FROM  estrellas WHERE idLugar = $idLugar AND idUsuario =  $idUsuario";
        $resultado2 =$conexion->query($query2);
        $rowB = $resultado2->fetch_assoc();

        $sql1 = $conexion->query("SELECT COUNT(*) AS total FROM estrellas WHERE idLugar = $idLugar");
        $numR= mysqli_fetch_array($sql1);
        $use = $numR['total'];
    
        $sql = $conexion->query("SELECT SUM(ranking) AS total FROM estrellas WHERE idLugar = $idLugar");
        $rData = $sql->fetch_array();
        $total = $rData['total'];
       
        $queryFAV = "SELECT * FROM  fav WHERE idLugar = $idLugar AND idUsuario =  $idUsuario";
        $resultadoFAV =$conexion->query($queryFAV);
        $rowFAV = $resultadoFAV->fetch_assoc();
        
  
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
          "est1": "<?php echo $rowB['1est'];?>",
          "est2": "<?php echo $rowB['2est'];?>",
          "est3": "<?php echo $rowB['3est'];?>",
          "est4": "<?php echo $rowB['4est'];?>",
          "est5": "<?php echo $rowB['5est'];?>",
          "total": "<?php echo  $total ?>",
          "user": "<?php echo  $use?>",
          "fav": "<?php echo $rowFAV['class'];?>",
           "lat" : "<?php echo $row['lat'];?>",
           "id" : "<?php echo $row['idLugar'];?>",
           "ing" : "<?php echo $row['ing'];?>"
        }
      },

     <?php  } ?>
      
]
