<?php

session_start();
require '../login/funcs/conexion.php';
require '../login/funcs/funcs.php';

if(!isset($_SESSION["id_usuario"])){

	header("Location: ../login/index.php");
}
$idUsuario = $_SESSION["id_usuario"];

$sql = "SELECT * FROM usuarios WHERE id='$idUsuario'";
$result = $mysqli->query($sql);

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Editar Perfil</title>
</head>
<body>
<header>
</header>
      <main>
    <div class="container">
      <div class="left box-primary df">
        <img class="image" src="./img/<?php echo utf8_decode($row['imagen']); ?>" alt="" />
        <h3 class="username text-center"><?php echo utf8_decode($row['nombre']); ?></h3>

      <form class="form-horizontal" action="editar_procesos.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
<div  class="upload-btn-wrapper">
        <button class="foto" id="foto"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -4 24 24" width="24" height="24" preserveAspectRatio="xMinYMin" class="icon__icon"><path d="M5.676 5H4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1.676l-.387-1.501A2.002 2.002 0 0 0 12 2H8a2 2 0 0 0-1.937 1.499L5.676 5zm-1.55-2C4.57 1.275 6.136 0 8 0h4a4.002 4.002 0 0 1 3.874 3H16a4 4 0 0 1 4 4v5a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4h.126zM10 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm6-3a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path></svg></button>
        <input type="file" name="myfile" id="finput" onchange="upload()"/>
</div><br><br>
<canvas id="c2"></canvas>
      </div>
      <div class="right tab-content">
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Nombre</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputName" name="nombre" required value="<?php echo utf8_decode($row['nombre']); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" disabled id="inputEmail" value="<?php echo utf8_decode($row['correo']); ?>">
            </div>
          </div>
          <div class="form-group">
            <div class= "col-sm-12 has-feedback">
              <label for="" class="control-label">Usuario</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail"name="usuario" required value="<?php echo utf8_decode($row['usuario']); ?>">
            </div>
            </div> 
          </div>    
        
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="foto ac">Actualizar</button>
            </div>
          </div>
            </div>
        </form>
      </div>
    </div>
  </main>
</body>
<script src="https://www.dukelearntoprogram.com//course1/common/js/image/SimpleImage.js">
  </script>
<script>

function upload() {
   var imagcanvas = document.getElementById("c2");
   var fileinput = document.getElementById("finput");
   var image = new SimpleImage(fileinput);
   image.drawTo(imagcanvas);
}
</script>
</html>