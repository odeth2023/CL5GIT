<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="header">
        <div class="logo">
            <!--<a href="#"><img src="img/netflixlogo.png" alt=""></a>-->
            <a class="text-danger fs-3 fw-bolder text-decoration-none" href="index.php">Cinemovie</a>
        </div>
    </div>

    <!--usuario, clave, ingresar -->
    <div class="login_body">
        <div class="login_box">
            
            <h2>Entrar</h2>
            <form method="post" action="">
                <div class="input_box">
                    <input type="email" placeholder="Usuario" name="usuario">
                </div>

                <div class="input_box">
                    <input type="password" placeholder="Contraseña" name="clave">
                </div>

                <div>
                    <input class="mb-3 submit" type="submit" name="ingresar"></input>
                    
                    <?php
                        include "modelo/conexion.php";
                        include "Controller/ControlLogin.php";
                    ?>     
                   

                </div>
                
            </form>

            <div class="support">
                <div class="remember">
                    <span><input type="checkbox" style="margin: 0;padding: 0; height: 13px;"></span>
                    <span>Lembre-se de mim</span>
                </div>
                <div class="help">
                    <a href="#">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div>
            </div>

            <div class="login_footer pt-3">

                <div class="sign_up">
                    <p>¿Nuevo por aquí? <a href="#">Registrate Ahora</a></p>
                </div>

                
            </div>
        </div>
    </div>
</body>

</html>