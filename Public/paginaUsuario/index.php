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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Nemi</title>
</head>
<body>
  
    <div id="sidemenu" class="menu-collapsed">

        <div id="header">
            <div id="menu-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-5 -7 24 24" width="24" height="24" preserveAspectRatio="xMinYMin" class="icon__icon"><path d="M1 0h5a1 1 0 1 1 0 2H1a1 1 0 1 1 0-2zm7 8h5a1 1 0 0 1 0 2H8a1 1 0 1 1 0-2zM1 4h12a1 1 0 0 1 0 2H1a1 1 0 1 1 0-2z"></path></svg>
             
               
            </div>
        </div>

      <!-- profile -->
      <div id="profile">
            <div id="photo">
                <img class="imagen" src="./img/<?php echo utf8_decode($row['imagen']); ?>" alt="profile picture">
              <a href="edit_perfil.php"><img class="iconadd" src="./img/add.png" alt="profile picture"></a>
            </div>
                <div id="name">
                    <spam><?php echo utf8_decode($row['nombre']); ?></spam>
                </div>
        </div>
        <!-- items -->
        <br>
         <div id="menu-items">
            <div class="item">
                <a href="../Informacion.html">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-5 -2 24 24" width="24" height="24" preserveAspectRatio="xMinYMin" class="icon__icon"><path d="M3.348 12h7.304l-2.57-4.774L9.54 7.12 7 2.887 4.461 7.12l1.46.104L3.347 12zm7.958-3.003l1.9 3.529a1 1 0 0 1-.88 1.474H8v5a1 1 0 0 1-2 0v-5H1.674a1 1 0 0 1-.88-1.474l1.9-3.529-.72-.387a.996.996 0 0 1-.065-1.124L6.143.429a1 1 0 0 1 1.714 0l4.234 7.057a1 1 0 0 1-.064 1.123l-.72.388z"></path></svg></div>
                <div class="title"><span>Cuidar el planeta</span></div>
                </a>
            </div>
        </div>
        <?php if($row['id_tipo'] == 2){   ?>
         <div id="menu-items">
            <div class="item">
                <a href="../../private/favoritos/index.php">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" height="24" preserveAspectRatio="xMinYMin" class="icon__icon"><path d="M2 3v4h12.98l2.853-1.714a.333.333 0 0 0 0-.572L14.98 3H2zm6-2a1 1 0 1 1 2 0h4.98a2 2 0 0 1 1.03.286L18.863 3a2.333 2.333 0 0 1 0 4L16.01 8.714A2 2 0 0 1 14.98 9H10v1h7.995a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H10v1a1 1 0 0 1-2 0v-1H5.015a2 2 0 0 1-1.03-.286L1.132 16a2.333 2.333 0 0 1 0-4l2.853-1.714A2 2 0 0 1 5.015 10H8V9H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h6zm9.995 11H5.015l-2.853 1.714a.333.333 0 0 0 0 .572L5.015 16h12.98v-4z"></path></svg></div>
                <div class="title"><span>Lugares favoritos</span></div>
                </a>
            </div>
        </div>
        <?php  } ?>

        <div id="menu-items">
            <div class="item">
                <a href="../../private/gps/index.php">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" height="24" preserveAspectRatio="xMinYMin" class="icon__icon"><path d="M11.932 9.482a2.003 2.003 0 0 1-2.45 2.45L6.464 14.95a1 1 0 1 1-1.414-1.414l3.018-3.018a2.003 2.003 0 0 1 2.45-2.45l3.018-3.018a1 1 0 0 1 1.414 1.414l-3.018 3.018zM10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"></path></svg></div>
                <div class="title"><span>Explorar</span></div>
                </a>
            </div>
        </div>
    


        <?php if($row['id_tipo'] == 2){   ?>
        <div id="menu-items">
            <div class="item">
                <a href="../SugerenciaLugar/index.php">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg></div>
                <div class="title"><span>Sugerencia</span></div>
                </a>
            </div>
        </div>
        <?php  } 
 
  
        if($row['id_tipo'] == 1){   ?>
              <div id="menu-items">
                <div class="item">
                <a href="../../private/gps/guardarLugar/index.php">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="32" height="32" preserveAspectRatio="xMinYMin" class="icon__icon"><path d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"></path>
               <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"></path>
               <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"></path>
               </svg></div>
                <div class="title"><span>Agregar Lugar</span></div>
                </a>
               </div>
               </div>
    <?php  } ?>


    <?php  if($row['id_tipo'] == 1){   ?>
              <div id="menu-items">
                <div class="item">
                <a href="../../private/admSugerencias/index.php">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg></div>
                <div class="title"><span>Adm.Sugerencias</span></div>
                </a>
               </div>
               </div>
    <?php  } ?>

    <div id="menu-items">
            <div class="item">
                <a href="#">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="bi bi-question-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
               </svg></div>
                <div class="title"><span>Ayuda</span></div>
                </a>
            </div>
        </div> 

        
       
         <div id="menu-items">
            <div class="item log">
                <a href="../login/logout.php">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="30" height="30" preserveAspectRatio="xMinYMin" class="icon__icon"><path d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"></path>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/></svg></div>
                <div class="title"><span>Cerrar sesión</span></div>
                </a>
            </div>
        </div>
    </div>


    <?php
   $con=mysqli_connect("localhost","root","","Nemi_db");
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
   $sqlUS="SELECT * FROM usuarios";
   $run_queryUS=mysqli_query($con,$sqlUS);
   $countUS=mysqli_num_rows($run_queryUS);

   $sqlFA="SELECT * FROM fav WHERE idUsuario = '$idUsuario'";
   $run_queryFA=mysqli_query($con,$sqlFA);
   $countFA=mysqli_num_rows($run_queryFA);

   $sqlLU="SELECT * FROM lugares";
   $run_queryLU=mysqli_query($con,$sqlLU);
   $countLU=mysqli_num_rows($run_queryLU);
   ?>
        
        

        <section class="about-us">
        <div class="contenedor">
            <h1 class="titulo">¿Cuánto conoces de NEMI?</h1>
            <div class="contenedor-articulo">
                <div class="user__articulo" data-aos="zoom-in-right">
                    <h3><i class="uil uil-user-plus user__icon">    <?php echo $countUS?>+</i></h3>
                    
                    <p style="text-align: center;">Personas que estan registradas.</p>
                </div>
                <div class="user__articulo" data-aos="zoom-in-right">
                    <h3><i class="uil uil-favorite user__icon">    <?php echo $countFA?>+</i></h3>
                    <p style="text-align: center;">Lugares a los cuales has añadido como tus favoritos
                    </p>
                </div>
                <div class="user__articulo" data-aos="zoom-in-right">
                    <h3><i class="uil uil-map-marker-question user__icon">   <?php echo $countLU?>+</i> </h3>
                    <p style="text-align: center;">Lugares recreativos registrados en Nemi hasta el momento .</p>
                </div>
                <iframe width="550" height="325" src="https://www.youtube.com/embed/YVdVA1IqjZM" 
                 frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
                            
 
         
    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener('click', e => {
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");

            document.querySelector('body').classList.toggle('body-expanded');
        });
    </script>
    

    
</body>
</html>
