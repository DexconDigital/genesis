<?php

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM noticias  where id_inmobiliaria2 = 9 order by id desc";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result)) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $descripcion = $field['descripcion'];
    $imagen = $field['imagen'];
    $noticia = $field['noticia'];
    $fecha = $field['fecha'];
    $archivo = $field['archivo'];
    $noticias_array[] = array(
        'titulo' => $nombre,
        'id' => $id,
        'descripcion' => $descripcion,
        'imagen' => $imagen,
        'noticia' => $noticia,
        'fecha' => $fecha,
        'archivo' => $archivo
    );
}
function modelo_ultima_noticia($r)
{
    $cantidad_noticias = 1;
    for ($i = 0; $i < $cantidad_noticias; $i++) {
        $ruta_imagen = "./Genesis-Admin/admin/" . $r[$i]['imagen'];
        echo '
        <div class="col-md-4">
        <div class="card" style="border-color: white;">
        <img style="object-fit: cover;width: 100%;height: 255px;" src="' . $ruta_imagen . '" class="card-img-top" alt="...">  
            <div class="card-body espacio_tageta mt-4">
                <h4 class="card-title"><strong>' . $r[$i]['titulo'] .'</strong></h4>
                <p>' . $r[$i]['fecha'] .'</p>
                <p style="border-bottom: 1px dashed #646464; margin-bottom: 30px;padding-bottom: 30px;" class="card-text">' . $r[$i]['descripcion'] . '</p>
                <a id="bonton_verde" href="./detalle-noticia.php?co=' . $r[$i]['id'] . '" class="btn rounded-0 text-center">Ver más</a>
            </div>
        </div>
    </div>
   
        ';
    }
}


function modelo_noticia($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $ruta_imagen = "./Genesis-Admin/admin/" . $r[$i]['imagen'];
        echo '
        <div class="col-md-4">
        <div class="card" style="border-color: white;">
        <img style="object-fit: cover;width: 100%;height: 255px;" src="' . $ruta_imagen . '" class="card-img-top" alt="...">  
            <div class="card-body espacio_tageta mt-4">
                <h4 class="card-title"><strong>' . $r[$i]['titulo'] .'</strong></h4>
                <p>' . $r[$i]['fecha'] .'</p>
                <p style="border-bottom: 1px dashed #646464; margin-bottom: 30px;padding-bottom: 30px;" class="card-text">' . $r[$i]['descripcion'] . '</p>
                <a id="bonton_verde" href="./detalle-noticia.php?co=' . $r[$i]['id'] . '" class="btn rounded-0 text-center">Ver más</a>
            </div>
        </div>
    </div>
    ';
    }
}
