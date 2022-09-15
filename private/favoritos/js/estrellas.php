<?php 
  session_start();

$idUsuario = $_SESSION["id_usuario"];
$idLugar = $_POST['id'];
$estrellas = $_POST['cont'];

$conn = new mysqli('localhost', 'root', '', 'nemi_db');

if ($estrellas == 1) {
    $est1 = 'orange';
    $est2 = 'black';
    $est3 = 'black';
    $est4 = 'black';
    $est5 = 'black';
} elseif ($estrellas == 2) {
    $est1 = 'orange';
    $est2 = 'orange';
    $est3 = 'black';
    $est4 = 'black';
    $est5 = 'black';
} elseif ($estrellas == 3) {
    $est1 = 'orange';
    $est2 = 'orange';
    $est3 = 'orange';
    $est4 = 'black';
    $est5 = 'black';
}elseif ($estrellas == 4) {
    $est1 = 'orange';
    $est2 = 'orange';
    $est3 = 'orange';
    $est4 = 'orange';
    $est5 = 'black';
}elseif ($estrellas == 5) {
    $est1 = 'orange';
    $est2 = 'orange';
    $est3 = 'orange';
    $est4 = 'orange';
    $est5 = 'orange';
}

$sql="select * from estrellas where idUsuario=$idUsuario and idLugar = $idLugar";
$resultado2 =$conn->query($sql);

if(mysqli_num_rows ($resultado2)){
    $sqlup = "UPDATE estrellas SET idUsuario='$idUsuario',idLugar='$idLugar',1est='$est1',2est='$est2',3est='$est3',4est='$est4',5est='$est5',ranking='$estrellas' WHERE idUsuario = '$idUsuario' AND idLugar = '$idLugar'";
    $run_query=mysqli_query($conn,$sqlup);
}else{
$conn->query("INSERT INTO estrellas (idUsuario,	idLugar,1est,2est,3est,4est,5est,ranking) VALUES ('$idUsuario','$idLugar','$est1','$est2','$est3','$est4','$est5','$estrellas')");
}



?>
