<?php 
    // modelo inmueble propiedades destacadas Recibe el array y la cantidad de inmuebles a mostrar
    function modelo_inmueble_destacadas($r, $cantidad_inmuebles){
        // Recorrer el array la cantidad de veces que se le indique
        for ($i = 0; $i < $cantidad_inmuebles; $i++) {

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
    
