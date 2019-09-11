<?php

require_once("conexion.php");

$link = Conect();
$array = array();

$sql1 = "SELECT * FROM asesores  where id_inmobiliaria = 9 order by id desc";
$result1 = mysqli_query($link, $sql1) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result1)) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $telefono = $field['telefono'];
    $correo = $field['correo'];
    $imagen = $field['imagen'];
    $fecha = $field['fecha'];
    $cargo = $field['cargo'];
   
    $asesor_array[] = array(
        'nombre' => $nombre,
        'id' => $id,
        'telefono' => $telefono,
        'correo' => $correo,
        'imagen' => $imagen,
        'fecha' => $fecha,
        'cargo' => $cargo,
    );
}


function modelo_asesor($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $ruta_imagen = "./Genesis-Admin/admin/" . $r[$i]['imagen'];
        echo '
         
        <div class="col-md-4">
                    <div class="single-agent property">
                        <div class="property-image">
                            <a> <img style="object-fit: contain;width: 100%;height: 100%;"; src="' . $ruta_imagen . '" class="card-img-top"></a>
                        </div>
                        <div class=" ">
                            <div class="overlay">
                                <ul class="additional-info">
                                    <li>
                                        <header><strong>Celular: </strong>   <a id="color_info_asesor" href="tel:' . $r[$i]['telefono'] .'" target="_blank"> ' . $r[$i]['telefono'] .'</a></header>
                                    </li>
                                    <li>
                                        <header><strong>Correo: </strong> <a id="color_info_asesor" href="mailto:' . $r[$i]['correo'] .'" target="_blank"> ' . $r[$i]['correo'] .'</a></header>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="asesor_style mt-3">
                        <h3><a><strong></strong> ' . $r[$i]['nombre'] .'</a></h3>
                        <p class="designation">' . $r[$i]['cargo'] .'</p>
                    </div>
                </div>
    ';
    }
}
