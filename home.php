<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEMI</title>
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css'><link rel="stylesheet" href="css/team.css">
    <link rel="stylesheet" href="Public/Home.css">
</head>
<body>
    

        <header id="header">

        <div id="normal-header">
        <a href="#" id="image-link"><img src="../../media/logo.png" alt="Reverse Logo" id="header-img"/></a>

        <nav id="nav-bar">
            <ul>
            <li class="nav-link" id="menu-item"><a href="#" class="menu-link"> Home </a></li>
            <li class="nav-link" id="menu-item"><a href="#" class="menu-link"> ¿Quiénes somos? </a></li>
            <li class="nav-link" id="menu-item"><a href="Informacion.html" class="menu-link"> Cuidar el planeta </a></li>
            <li class="nav-link" id="menu-item"><a href="login/index.php" id="nav-cta"> Ingresar </a></li>
            </ul>
        </nav>
        </div>


        <div id="responsive-header">
        <div id="responsive-logo-button">
            <a href="#" id="image-link"><img src="../../media/logo.png" alt="Reverse Logo" id="header-img-black"/></a>
            <button id="image-button-black"><img src="https://i.ibb.co/yfM3fdZ/dropdown-menu-black.png" alt="Dropdown Menu" id="dropdown-button-black" /></button>
        </div>

        <div id="responsive-nav-bar">
            <ul>
            <li class="nav-link" id="responsive-home-item"><a href="#" class="responsive-menu-link"> Home </a></li>
            <li class="nav-link" id="responsive-features-item"><a href="#" class="responsive-menu-link"> ¿Quienes somos? </a></li>
            <li class="nav-link" id="menu-item"><a href="Public/Informacion.html" class="menu-link"> Cuidar el planeta </a></li>
            <li class="nav-link" id="menu-item"><a href="Public/login/index.php" id="nav-cta"> Ingresar </a></li>
            <li class="nav-link" id="responsive-products-item"><a href="#" class="responsive-menu-link">  </a></li>
            </ul>
        </div>
        </div>

    </header>



    <section>
    <div class="cover-container">
        <video class="video" src="../../media/video.mp4" autoPlay loop muted ></video>
            <h1>¿En busca de un escape?</h1>
            <p>Encuentra un espacio con la madre naturaleza </p>
            <button class="btn-pill">
            <a href="Public/login/index.php">
            <span>Comenzar</span>
            </a>
            </button>
        </div>
    </section>


        <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width slides/quotes -->
    <div class="mySlides">
        <q>La naturaleza no hace nada incompleto ni nada en vano.</q>
        <p class="author">- Aristóteles</p>
    </div>

    <div class="mySlides">
        <q>En la naturaleza está la preservación del mundo.</q>
        <p class="author">- Henry David Thoreau</p>
    </div>

    <div class="mySlides">
        <q>Los árboles son los esfuerzos de la tierra para hablar con el cielo que escucha.</q>
        <p class="author">- Rabindranath Tagore</p>
    </div>
    <div class="mySlides">
        <q>En todo paseo con la naturaleza uno recibe mucho más de lo que busca.</q>
        <p class="author">- John Muir</p>
    </div>
    <div class="mySlides">
        <q>Si sirves a la Naturaleza, ella te servirá a ti.</q>
        <p class="author">- Confucio</p>
    </div>
    <div class="mySlides">
        <q>No heredamos la tierra de nuestros ancestros, la tomamos prestada de nuestros hijos.</q>
        <p class="author">- Proverbio nativo americano</p>
    </div>

    <!-- Next/prev buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- Dots/bullets/indicators -->
    <div class="dot-container">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    </div>

<?php
$con=mysqli_connect("us-cdbr-east-06.cleardb.net","b91a369a3679a9","a158ff82","heroku_73f451983320285");
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
$sql="SELECT * FROM usuarios ";
$run_query=mysqli_query($con,$sql);
$count=mysqli_num_rows($run_query);
?>

    <section class="results">
        <div class="contenedor1 conten-results">
            <section class="numbers">
                <div class="number" data-aos="zoom-in-left">
                    <h4>+<?php echo contador3();?></h4>
                    <p>Personas que han visitado el sitio</p>
                </div>
                <div class="number" data-aos="zoom-in-left">
                    <h4>+<?php echo $count?></h4>
                    <p>Personas a quienes se le ha brindado el servicio.</p>
                </div>
                
            </section>
            <section class="results-text">
                <h4>Personas interesadas en el medio ambiente</h4>
                <p>Registro de personas que han utilizado el sotfware y que han sido beneficiados con los
                    nuestras herramientas.
                </p>
            </section>
        </div>
    </section>

    <div class="wrapper">

    <section class="module-team">

        <div class="team">
            <h2 class="title">Nuestro equipo</h2>
            <div class="team-cards">

                <!-- Slider main container -->
                <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper"></div>

                </div>

                <div class="swiper-pagination"></div>
                <!-- If we need navigation buttons -->
                <div class="navigation">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                </div>
            </div>

        </div>
</div>

</section>



<section class="info">
<div class="info-container">
            <div class="info">
            <h1>Síguenos en nuestro  </h1>
            </div>
        </div>
</section>

</div>


    <footer>
        <div class="partFooter">
            <img src="../../media/logoblanco.png" alt="">

        </div>
        <div class="partFooter">
            <h4>Servicios</h4>
            <a href="#">Ministerio de medio ambiente y recursos naturales</a>
            <a href="#">Oficina Regional de Oriente, San Miguel</a>
            <a href="#">Colonia Ciudad Jardín, calle Los Naranjos, #22, San Miguel.</a>
            <a href="#">Tel: 2665-8383 </a>
        </div>
        <div class="partFooter">
            <h4>FAQ</h4>
            <a href="">Preguntas frecuentes</a>

        </div>
        <div class="partFooter">
            <h4>Contáctanos</h4>
            <div class="social-media">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
                <h5>Derechos reservados 2020 ©</h5>
            </div>
        </div>
    </footer>

    <div class="go-top-container">
        <div class="go-top-button">
            <i class="fas fa-chevron-up"></i>
        </div>
    </div>

    <script>
        window.addEventListener('scroll', function () {
            let header = document.querySelector('header');
            let windowPosition = window.scrollY > 0;
            header.classList.toggle('scrolling-active', windowPosition);
        })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="Public/js/menu.js"></script>
    <script src="Public/js/slider.js"></script>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js'></script><script  src="js/team.js"></script>
</body>
</html>

<?php
    function contador3(){
    $gg = 0;
    $archivo = "contador.txt"; //el archivo que contiene en numero
    $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
    if($gg == 0)
    {
        $contador = fread($f, filesize($archivo)); //leemos el archivo
        $contador = $contador +1; //sumamos +1 al contador
        fclose($f);
    }else{
        $contador = fread($f, filesize($archivo)); //leemos el archivo
        $contador = $contador; //sumamos +1 al contador
        fclose($f);
    }
    $f = fopen($archivo, "w+");
    if($f)
    {
        fwrite($f, $contador);
        fclose($f);
    }
    return $contador;
}



?>
