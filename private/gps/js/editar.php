<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui' />
	<title>Editar zona verde | Nemi</title>
	
	<script src='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet-src.js'></script>

	<link href='http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css' rel='stylesheet' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
	<link rel="stylesheet" href="../guardarLugar/map.css">

</head>


<?php   
$id = $_REQUEST['id'];

$conexion = new mysqli("localhost","root","","nemi_db");

if($conexion){
   
}else{
    echo "conexion fallida";
}

$query = "SELECT * FROM lugares WHERE id ='$id'";
$resultado =$conexion->query($query);
$row = $resultado->fetch_assoc();



?>


<body>
      <header class="header"></header>
      <h2 class="displayy"> ¿Editar zonas verdes?</h2>
            <p class="leadd">
                 <img src="../guardarLugar/info.png" alt="arbolinfo">
            </p>
            <div class="info">
                <p>Si conoces zonas verdes en la zona oriental del país completa el siguiente
                formulario para agregarlo en el mapa y para que sea visible a los demás usuarios de Nemi.</p>
               
            </div>
        <div class="containerr">
            <div class="title"><h2>Editar Zona Verde en el Mapa.<svg xmlns="http://www.w3.org/2000/svg" viewBox="-3.5 -1 24 24" width="24" height="24" preserveAspectRatio="xMinYMin" class="icon__icon"><path d="M3.572 7.572a5 5 0 1 0 8.29 5.592c1.005-1.489 1.738-4.816 2.085-9.85C8.004 4.7 4.484 6.221 3.572 7.571zm.231 8.6a7 7 0 0 1-1.889-9.718C3.356 4.317 8.08 2.433 16.084.801c-.268 6.851-1.122 11.345-2.563 13.482a7 7 0 0 1-9.718 1.889z"></path><path d="M2.066 20.07a1 1 0 1 1-2 0c0-3.465 1.7-6.711 4.55-8.685l.507-.352a1 1 0 0 1 1.139 1.644l-.507.352a8.567 8.567 0 0 0-3.689 7.042z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" height="24" preserveAspectRatio="xMinYMin" class="icon__icon"><path d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm1-7v4a1 1 0 0 1-2 0v-4H5a1 1 0 0 1 0-2h4V5a1 1 0 1 1 2 0v4h4a1 1 0 0 1 0 2h-4z"></path></svg></h2></div>
            <form role="form" action="proseso_editar.php?id=<?php echo $row['id']; ?>" method='post' enctype="multipart/form-data" class=formm>
                <div class="form-group">
                    <label>Ingrese el nombre del lugar</label>
                    <input class="form-control" type="text"  value="<?php echo $row['nombre'];?>" name="nombre" required size="25" />
                </div>
                <div class="form-group">
                    <label>Describa el lugar.</label>
                    <input class="form-control" type="text" name="descripcion" value="<?php echo $row['descripcion'];?>" required size="25" />
                </div>
                <div class="form-group">
                    <label>Ingrese el telefono</label>
                    <input class="form-control" type="text"  name="telefono" value="<?php echo $row['telefono'];?>" required size="25" />
                    <input class="form-control" type="text" id="lat"  name="lat" style="display: none;" value="" size="25" />
                    <input class="form-control" type="text" id="ing"  name="ing" style="display: none;" value="" size="25" />
                    <input class="form-control" type="text" id="latX"  style="display: none;" value="<?php echo $row['lat'];?>" size="25" />
                    <input class="form-control" type="text" id="ingX"  style="display: none;" value="<?php echo $row['ing'];?>" size="25" />
                </div>
               <br>
               <br>
                <input type="file" name="myfile" id="finput" onchange="upload()"/>
                <br>
                <br>
                <canvas id="c2"></canvas><br><br>
                <div class="form-group">
                    <label>Por favor seleccione la zona verde en el mapa.</label>
                </div>
                <div class="form-group">
                    <input class="form-control" type="hidden" name="user_lat" id="user_lat" value="" placeholder="Mover en el mapa"/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="hidden" name="user_lng" id="user_lng" value="" placeholder="Mover en el mapa"/>
                </div>
                <div>
                    <div id="map" style="width: 800px; height: 400px; border: 1px solid #AAA;">
                    </div>
                </div>
                <br>
                <input class="btn btn-primaryy" type="submit" name="submit" value="Enviar" />
           </form>
        </div>
        <script src="https://www.dukelearntoprogram.com//course1/common/js/image/SimpleImage.js">
       </script>
        <script src="editar.js"></script>
    </body>
</html>