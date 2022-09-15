<?php

session_start();

$idUsuario = $_SESSION["id_usuario"];
$idLugar = $_POST['id'];
$class = 'fa fa-bookmark';

$conn = new mysqli('localhost', 'root', '', 'nemi_db');



    $sqlup = "DELETE FROM fav WHERE idUsuario=$idUsuario and idLugar = $idLugar";
    $run_query=mysqli_query($conn,$sqlup);


?>