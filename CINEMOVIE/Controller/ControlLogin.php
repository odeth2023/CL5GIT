<?php
session_start();

if (!empty($_POST["ingresar"])){
    //echo"boton precionado";
    if(!empty($_POST["usuario"]) and !empty($_POST["clave"])){
        $usuario=$_POST["usuario"];
        $clave=$_POST["clave"];
        //echo $usuario;
        //echo $clave;
        $sql=$conexion->query(" select * from usuario where username='$usuario' and password='$clave' and estado='1' and idTipoUsuario='1'");
        if ($datos=$sql->fetch_object()){
            //alamacenando en variable id el id del usuario
            $_SESSION["id"]=$datos->idUsuario;
            $_SESSION["username"]=$datos->username;
            header("location:principal.php");
        }else{
            echo"<div class='alert alert-danger'>Acceso denegado</div>";
        }
    }else{
        echo"<div class=' alert alert-danger'>Campos vacíos</div>";
        //echo "Campos vacios";
    }

}

?>