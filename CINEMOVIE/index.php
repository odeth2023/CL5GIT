<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemovie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="css/prueba.css">
    <link rel="stylesheet" href="css/body.css">
</head>

<body>
    <header>
        <p class="text-danger fs-2">Cinemovie</p>
        <ul class="navigation">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Cartelera</a></li>
            <li><a href="#">Confitería</a></li>
            <li><a href="#">Próximos Estrenos</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </header>

    <div class="banner">
        <img src="images/bg.jpg" class="bg">

        <div class="content">
            <img src="images/name.png" class="movieTitle">
            <h4>
                <span>2023</span>
                <span><i>12+</i></span>
                <span>1h 55min</span>
                <span>Action</span>
            </h4>
            <p>
                aaaLorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsam maiores illo iure laboriosam quaerat vitae ad, debitis hic corporis sequi optio facere nostrum obcaecati earum, perferendis impedit. Quod, aspernatur.
            </p>

            <div class="buttons">
                <a href="#">
                    <i class="fa fa-play ps-2" aria-hidden="true"></i>
                    Ir</a>
                <!--<a href="#"><i class="fa fa-plus" aria-hidden="true"></i> My List</a>-->
            </div>
        </div>
        <a class="play" onclick="toggleVideo()"><img src="images/play.png">Watch Trailer</a>
    </div>

    <div class="trailer">
        <video src="assets/video.mp4" controls="true"></video>
        <img src="assets/close.png" class="close" onclick="toggleVideo()">
    </div>

    <div class="container">
        <h2 class="pb-4 text-white">ÚLTIMAS PELÍCULAS</h2>

        <div class="row">
            <?php
            //incluimos la conexion php
            include "modelo/conexion.php";
            //llamamos a la sentencia sql para seleecionar las peliculas en estado de cartelera activo
            $query = "SELECT img, nombre, Precio FROM pelicula where cartelera='1'";

            //EN NUESTRO CASO '$conexion' ES EL COMANDO QUE CONECTA A LA BD 
            //ejecuta consulta en la bd 
            if ($result = $conexion->query($query)) {

            //en un bucle se devolvera cada fila obtenido(conjunto de resultados de tabla)
            while ($row = $result->fetch_assoc()) {
            ?>

            <div class="col-xl-3 col-lg-4 col-sm-4 col-12">
                <div class="carta">
                    <!---Llamamos a los datos de cada fila mysql-->
                    <img src='img/<?php echo $row['img'];?>'>
                    <p class="text-white"><?php echo $row['nombre']; ?></p>
                    <p class="text-white"><?php echo $row['Precio']; ?></p>
                </div>
            </div>

            <?php 
            }}
            ?>

            <div class="col-xl-3 col-lg-4 col-sm-4 col-12">
                <div class="carta">
                    <img src="images/1.png">
                    <p class="text-white">One piece</p>
                    <p class="text-white">196 min</p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-4 col-12">
                <div class="carta">
                    <img src="images/2.png">
                    <p class="text-white">One piece</p>
                    <p class="text-white">196 min</p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-4 col-12">
                <div class="carta">
                    <img src="images/3.png">
                    <p class="text-white">One piece</p>
                    <p class="text-white">196 min</p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-4 col-12">
                <div class="carta">
                    <img src="images/4.png">
                    <p class="text-white">One piece</p>
                    <p class="text-white">196 min</p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-4 col-12">
                <div class="carta">
                    <img src="images/1.png">
                    <p class="text-white">One piece</p>
                    <p class="text-white">196 min</p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-4 col-12">
                <div class="carta">
                    <img src="images/2.png">
                    <p class="text-white">One piece</p>
                    <p class="text-white">196 min</p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-4 col-12">
                <div class="carta">
                    <img src="images/3.png">
                    <p class="text-white">One piece</p>
                    <p class="text-white">196 min</p>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-4 col-12">
                <div class="carta">
                    <img src="images/4.png">
                    <p class="text-white">One piece</p>
                    <p class="text-white">196 min</p>
                </div>
            </div>

            
        </div>
    </div>

   

</body>


    <script src="js/script.js"></script>
    <script src="https://yagasaki7k.github.io/custom-scripts/font-awesome.js"></script>
</html>