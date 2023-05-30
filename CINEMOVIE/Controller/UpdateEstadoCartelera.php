<?php
include "../modelo/conexion.php";
$id=$_POST["id"];
$estado=$_POST["estado"];

$query="update pelicula set cartelera='$estado' where idPelicula='$id'";
$result = $conexion->query($query);




//header('location:TipoCategorias.php');
//header("location:Pelicula.php");


?>
