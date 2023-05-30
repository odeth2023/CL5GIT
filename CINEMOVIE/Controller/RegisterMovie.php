<?php



if(isset($_POST['registrar']) && isset($_FILES['foto'])){
    include "../modelo/conexion.php";
    
    $nombreIMG = $_FILES["foto"]["name"];
    $sizeIMG = $_FILES["foto"]["size"];
    $tmp_IMG = $_FILES["foto"]["tmp_name"];
    $error = $_FILES["foto"]["error"];

    if($error===0){
        if($sizeIMG>125000){
            $em= "ARCHIVO DEMASIADO GRANDE";
            header("Location:../RegisterPelicula.php?error=$em");
        }else{

            $imagen_extension=pathinfo($nombreIMG, PATHINFO_EXTENSION);
            $imagen_extension_lc =strtolower($imagen_extension);
            
            $imagen_permitida=array('png','jpg','jpeg','webp');

            if(in_array($imagen_extension,$imagen_permitida)){
                $nombreNuevaImagen=uniqid('IMG-',true).'.'.$imagen_extension_lc;
                $imagen_subida='../img/'.$nombreNuevaImagen;
                move_uploaded_file($tmp_IMG,$imagen_subida);
                //datos
                $nombre = $_POST["nombre"];
                $descripcion = $_POST["descripcion"];
                $Precio= $_POST["precio"];

                $sql="insert into pelicula(idPelicula, img, nombre, descripcion, estado, Precio, idFuncion, cartelera, idCategoria) VALUES (NULL, '$nombreNuevaImagen', '$nombre', '$descripcion', '0', '$Precio', NULL, NULL, NULL)";
                
                $QUERY=mysqli_query($conexion,$sql);

                //$result = $conexion->query($query)

                if($QUERY){
                    header('Location:../Pelicula.php');
                }
            }else{
                $em='Ha ocurrido un error';
                header("Location:../RegisterPelicula.php?error=$em");
            
            }
        }
    }


}else{
    header('Location:../Pelicula.php');
}




?>
