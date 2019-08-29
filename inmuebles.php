<?php require 'variables/variables.php';
$page = 'inmueble' ?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>

    <title>Inmuebles</title>
</head>

<body>
    <div class="container-fluit-body">
        <section id="menu">
            <?php include 'layout/menu.php' ?>
        </section>

        <section id="buscador" class="contenedor_busca margen_inmueble">
            <div class="container">
                <div class=" row col-12">
                    <div class="col-3 margen_busca top_busca"><input type="text" class="form-control rounded-0" id="" placeholder="Código"></div>
                    <div class="col-3 margen_busca top_busca">
                        <select id="ciudad_buscar" class="form-control rounded-0">
                            <option selected="" value="0">Ciudad</option>
                        </select>
                    </div>

                    <div class="col-3 margen_busca top_busca">
                        <select id="" class="form-control rounded-0">
                            <option selected="barrio_buscar" value="0">Barrio</option>
                        </select>
                    </div>
                    <div class="col-3 margen_busca top_busca">
                        <select id="" class="form-control rounded-0">
                            <option selected="tipo_gestion_buscar" value="0">Tipo de Gestión</option>
                        </select>
                    </div>
                    <div class="col-3 margen_busca">
                    <select id="" class="form-control rounded-0">
                            <option selected="tipo_inmueble_buscar" value="0">Tipo de Inmueble</option>
                        </select>
                    </div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder=" Precio Mínimo"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder=" Precio Máximo"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder=" Baños"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder=" Habitaciones"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder=" Garajes"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder=" Área Mínima"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder=" Área Máxima"></div>
                    <div class="col-12 margen_busca"><button type="button" class="btn rounded-0 col-6 botoon_inmueble" name=""><span style="color:white">Buscar</span></button></div>
                </div>
            </div>
        </section>

        <section id="lista_inmueble">

            <div class="container ">
                <div class="col-md-12 row ">
                    <div class="col-md-3  cont_general">
                        <div class="img_noticia">
                            <a class="a_img" href="detalle_inmueble.php">
                                <img style="    width: 100%;" src=" images/no_image.png" alt="">
                            </a>
                        </div>

                    </div>
                    <div class="col-md-5  cont_general">
                        <div class="contenido_noti">
                            <h3 class="mrge_noti">
                                <a>Tipo de inmueble / Tipo de gestión</a></h3>
                            <li class="tamaño_icon_not"><i class="fas fa-map-marker-alt icon_noti"></i>Ubicación</li>
                            <p>Pequeña descripción</p>
                        </div>
                    </div>
                    <div class="col-md-2  cont_general">
                        <div class="cont_precio">
                            <ul class="list_aline">
                                <li class="estilo_letra_list"><a class="precio_style">$Precio</a></li>
                                <li class="cont_bott_noticia"><a class="boton_style" href="detalle_inmueble.php">Ver Más</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 cont_ico_noti">
                        <div class="list_icon_noti">
                            <ul class="magen_icon_list">
                                <li class="tamaño_icon_not"><i class="fa fa-bed icon_noti"></i>Alcobas</li>
                                <li class="tamaño_icon_not"><i class="fas fa-bath icon_noti"></i>Baños</li>
                                <li class="tamaño_icon_not"><i class="fas fa-ruler icon_noti"></i>Área</li>
                                <li class="tamaño_icon_not"><i class="fa fa-car icon_noti"></i>Garaje</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="footer">
            <?php include 'layout/footer.php' ?>
        </section>

    </div>





    <?php include('layout/archivosfooter.php'); ?>



</body>

</html>