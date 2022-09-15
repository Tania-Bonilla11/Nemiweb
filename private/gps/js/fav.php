<?php

session_start();

$idUsuario = $_SESSION["id_usuario"];
$idLugar = $_POST['id'];
$class = 'fa fa-bookmark';

$conn = new mysqli('localhost', 'root', '', 'nemi_db');

$sql="select * from fav where idUsuario=$idUsuario and idLugar = $idLugar";
$resultado2 =$conn->query($sql);

if(mysqli_num_rows ($resultado2)){
    $sqlup = "DELETE FROM fav WHERE idUsuario=$idUsuario and idLugar = $idLugar";
    $run_query=mysqli_query($conn,$sqlup);
}else{
    $ficha22 = "INSERT INTO fav(idUsuario,idLugar,class,nombre,descripcion,lat,ing,telefono,imagen) 
    select '$idUsuario','$idLugar','$class',nombre,descripcion,lat,ing,telefono,imagen from lugares where id = '$idLugar'";
    $insetar = mysqli_query($conn,$ficha22);
}

?>