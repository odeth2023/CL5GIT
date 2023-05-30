<?php
include "../modelo/conexion.php";
$id=$_POST["id"];
$estado=$_POST["estado"];

$query="update TipoCategoria set estado='$estado' where idTipoCategoria='$id'";

$result = $conexion->query($query)
?>

