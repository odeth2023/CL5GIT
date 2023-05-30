<?php
include "../modelo/conexion.php";
$id=$_POST["id"];
$estado=$_POST["estado"];

if($estado==0){
    $query="update pelicula set estado='$estado', cartelera='0' where idPelicula='$id'";
}

else{
    $query="update pelicula set estado='$estado' where idPelicula='$id'";
}

$result = $conexion->query($query)
//header('location:TipoCategorias.php');
//header("location:Pelicula.php");


?>

