<?php 
    // modelo inmueble propiedades destacadas Recibe el array y la cantidad de inmuebles a mostrar
    function modelo_inmueble_destacadas($r, $cantidad_inmuebles){
        // Recorrer el array la cantidad de veces que se le indique
        for ($i = 0; $i < $cantidad_inmuebles; $i=$i+2) {
            $j= $i+1;
            // validar si existe la imagen, si no existe colocar la imagen de no imagen
            $imagen = existeImagen(($r[$i]['foto1']));
            // Eliminar el id de la inmobiliaria
            $codigo = str_ireplace("583-", "", $r[$i]['Codigo_Inmueble']);
            // a la variable "api" le asignamos el array con la iteraccion
            $api = $r[$i];
            $precio = price_validate($api);
            // Renombrar variables
			$ciudad = $api['Ciudad'];
			$barrio = $api['Barrio'];
			$gestion = $api['Gestion'];
			$tipo_inmueble = $api['Tipo_Inmueble'];
			$alcobas = $api['Alcobas'];
			$banios = $api['banios'];
			$garaje = $api['garaje'];
			$area_construida = $api ['AreaConstruida'];
			$area_privada = $api['AreaLote'];
			$administracion = $api['Administracion'];
			$canon = $api['Canon'];
			$edad_inmueble =$api['EdadInmueble'];
			$estrato = $api['Estrato'];
            $venta = $api['Venta'];

            $imagen2 = existeImagen(($r[$j]['foto1']));

            // Eliminar el id de la inmobiliaria
            $codigo2 = str_ireplace("583-", "", $r[$j]['Codigo_Inmueble']);
            // a la variable "api" le asignamos el array con la iteraccion
            $api2 = $r[$j];
            $precio2 = price_validate($api2);
            // Renombrar variables
			$ciudad2 = $api2['Ciudad'];
			$barrio2 = $api2['Barrio'];
			$gestion2 = $api2['Gestion'];
			$tipo_inmueble2 = $api2['Tipo_Inmueble'];
			$alcobas2 = $api2['Alcobas'];
			$banios2 = $api2['banios'];
			$garaje2 = $api2['garaje'];
			$area_construida2 = $api2['AreaConstruida'];
			$area_privada2 = $api2['AreaLote'];
			$administracion2 = $api2['Administracion'];
			$canon2 = $api2['Canon'];
			$edad_inmueble2 =$api2['EdadInmueble'];
			$estrato2 = $api2['Estrato'];
            $venta2 = $api2['Venta'];

            echo '
            <div class="item ">
            <div class="item margen_targe">
                <!-- ***********************Primera Propiedad *****************************-->
                <div class="col-md-12 row" style="margin-bottom: 40px;">
                    <div class="col-md-7 row ">
                        <img style="object-fit: cover;width: 100%;height: 100%;" src="'.$imagen.'" alt="">
                        <span class="style_span_tipo_inmueble">'.$tipo_inmueble.'</span>
                    </div>
                    <div class="col-md-5 ">
                        <div class="col-12 ">
                            <h5> <strong>'.$gestion.'</strong></h5>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-12">
                                <li class="fas fa-map-marker-alt mr-2 mb-2 ">'.$barrio.', '.$ciudad.'</li>
                            </div>
                            <div class="col-md-12">
                                <li class="fas fa-chart-area mr-2 mb-2 "> Área: '.$area_construida.' m<sup>2</sup></li>
                            </div>
                            <div class="col-md-12">
                                <li class="fas fa-bath  mr-2 mb-2 "> Baños: '.$banios.'</li>
                            </div>
                            <div class="col-md-12">
                                <li class="fas fa-bed  mr-2 mb-2 "> Alcobas: '.$alcobas.'</li>
                            </div>
                            <div class="col-md-12">
                                <li class="fas fa-bed  mr-2 mb-2 "> Codigo: '.$codigo.'</li>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <span class="style_span_precio">'.$precio.'</span>
                        </div>
                    </div>
                </div>
                <!-- ****************************Segunda Propiedad******************************* -->
                <div class="col-md-12 row ">
                    <div class="col-md-7 row ">
                    <img style="object-fit: cover;width: 100%;height: 100%;" src="'.$imagen2.'" alt="">
                    <span class="style_span_tipo_inmueble">'.$tipo_inmueble2.'</span>
                    </div>
                    <div class="col-md-5 ">
                        <div class="col-12 ">
                            <h5> <strong>'.$gestion2.'</strong></h5>
                        </div>
                        <div class="col-md-12    p-2">
                        <div class="col-md-12">
                        <li class="fas fa-map-marker-alt mr-2 mb-2 ">'.$barrio2.', '.$ciudad2.'</li>
                    </div>
                    <div class="col-md-12">
                        <li class="fas fa-chart-area mr-2 mb-2 "> Área: '.$area_construida2.' m<sup>2</sup></li>
                    </div>
                    <div class="col-md-12">
                        <li class="fas fa-bath  mr-2 mb-2 "> Baños: '.$banios2.'</li>
                    </div>
                    <div class="col-md-12">
                        <li class="fas fa-bed  mr-2 mb-2 "> Alcobas: '.$alcobas2.'</li>
                    </div>
                    <div class="col-md-12">
                        <li class="fas fa-bed  mr-2 mb-2 "> Codigo: '.$codigo2.'</li>
                    </div>
                        </div>
                        <div class="col-md-12">
                            <span class="style_span_precio">'.$precio2.'</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            ';
            
        }
    }


    function modelo_inmueble_listar($r){
        // Recorrer el array la cantidad de veces que se le indique
        for ($i = 0; $i < count($r); $i++) {

            // validar si existe la imagen, si no existe colocar la imagen de no imagen
            $imagen = existeImagen(($r[$i]['foto1']));
            
            // Eliminar el id de la inmobiliaria
            $codigo = str_ireplace("254-", "", $r[$i]['Codigo_Inmueble']);

            // a la variable "api" le asignamos el array con la iteraccion
            $api = $r[$i];
            $precio = price_validate($api);
            // Renombrar variables
			$ciudad = $api['Ciudad'];
			$barrio = $api['Barrio'];
			$gestion = $api['Gestion'];
			$tipo_inmueble = $api['Tipo_Inmueble'];
			$alcobas = $api['Alcobas'];
			$banios = $api['banios'];
			$garaje = $api['garaje'];
			$area_construida = $api ['AreaConstruida'];
			$area_privada = $api['AreaLote'];
			$administracion = $api['Administracion'];
			$canon = $api['Canon'];
			$edad_inmueble =$api['EdadInmueble'];
			$estrato = $api['Estrato'];
            $venta = $api['Venta'];
        }
    }


    function modelo_inmueble_similares($r){
        for ($i = 0; $i < count($r); $i++) {
            $imagen = existeImagen(($r[$i]['foto1']));
            $codigo = str_ireplace("254-", "", $r[$i]['Codigo_Inmueble']);
            $api = $r[$i];
            $precio = price_validate($api);
            // Renombrar variables
			$ciudad = $api['Ciudad'];
			$barrio = $api['Barrio'];
			$gestion = $api['Gestion'];
			$tipo_inmueble = $api['Tipo_Inmueble'];
        }
    }

    // Funciones para los modelos de propiedades
    function existeImagen($r) {
            if ($r == "") {
                $r = "images/no_image.png";
            }
            return $r;
    }

    function price_validate($r){
        $precio = '';
        if($r['Gestion'] == 'Arriendo'){
            $precio =  '$'.$r['Canon'];
        }else if($r['Gestion'] == 'Venta'){
            $precio = '$'.$r['Venta'];
        }else{
            $precio = '$'.$r['Canon'].'/ $'.$r['Venta'];
        }
        return $precio;
    }
    
