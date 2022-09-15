<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../../Public/lib/alertifyjs/css/alertify.min.css">
 
    
    <title>Favoritos</title>
</head>

<body>
    <main>
        <div class="store-list">
            <div class="heading">
            <h2><img width="250px" src="../gps/img/nemi.png" alt="">Zonas Favoritas</h2>
            </div>
            <ul class="list">
            </ul>
        </div>
        <div id="map"></div>
        <input type="text" id="lat" value="" style="display: none;"></input>
        <input type="text" id="lng" value="" style="display: none;"></input>
    </main>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


        <script src="../gps/leaflet-routing-machine-3.2.12/dist/leaflet-routing-machine.js"></script>
        <link rel="stylesheet" href="../gps/leaflet-routing-machine-3.2.12/dist/leaflet-routing-machine.css">

    <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script src="js/stores.php"></script>
    
    <script src="../../Public/lib/alertifyjs/alertify.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

   
    <script src="js/app.js"></script>

</body>

</html>