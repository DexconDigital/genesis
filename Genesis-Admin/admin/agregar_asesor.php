
<?php
require_once 'conexion.php';

$nom_asesor=$_REQUEST["nom_asesor"];
$cel_asesor=$_REQUEST["cel_asesor"];
$cor_asesor= $_POST["cor_asesor"];
$image=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$image);
$destino="asesores/".$nombre_foto ;
$fecha=$_REQUEST["fecha"];
$fecha = date("Y-m-d");
$cargo=$_REQUEST["cargo"];
$id_inmo = 9;


/*

$nombre_ar = $_FILES['archivo']['name'];
$limite_kb = 850;
if($nombre_ar != ""){
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $rutas = $_FILES['archivo']['tmp_name'];
    $nombre_archivo = str_replace(" ","",$nombre_ar);
    $destinos="archivo/".$nombre_archivo; 
    if($tamanio <= $limite_kb * 1024){
        $nombre_archivo = str_replace(" ","",$nombre_ar);
        $destinos="archivo/".$nombre_archivo; 
    }else{
        echo "Archivo demaciado Grande";
    }
    
    $con = Conect();
        copy($rutas,$destinos);
}
*/

$con = Conect();
    copy($ruta,$destino);

    
mysqli_query($con, "INSERT INTO `asesores` (`id`, `nombre`,`telefono`,`correo`,`imagen`,`id_inmobiliaria`,`fecha`,`cargo`) VALUES (NULL, '$nom_asesor','$cel_asesor','$cor_asesor','$destino','$id_inmo','$fecha','$cargo')");
header("Location: lista_asesores.php");
    
   
?>