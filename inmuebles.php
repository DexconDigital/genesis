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

        <section id="buscador">
            <div class="container" style="margin-top: 34px;">
                <div class=" row col-12">
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder="Código"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder="Ciudad"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder="Barrio"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder="Tipo de Gestión"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder="Tipo de Inmueble"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder=" Precio Mínimo"></div>
                    <div class="col-3 margen_busca"><input type="text" class="form-control rounded-0" id="" placeholder=" Precio Máximo"></div>
                    <div class="col-3 margen_busca"><button style="background-color:#99cf16; padding: 6px;" type="button" class="btn rounded-0 col-12" name=""><span style="color:white">Buscar</span></button></div>
                </div>
            </div>
        </section>

        <section id="lista_inmueble">

            <div class="container border border-secondary">
                <div class="col-md-12 row border border-secondary">
                    <div class="col-md-3 border border-secondary cont_general">
                        <div class="img_noticia">
                            <a class="a_img" href="detalle_inmueble.php">
                                <img style="    width: 100%;" src=" images/no_image.png" alt="">
                            </a>
                        </div>

                    </div>
                    <div class="col-md-5 border border-secondary cont_general">
                        <div class="contenido_noti">
                            <h3 class="mrge_noti">
                                <a>Tipo de inmueble / Tipo de gestión</a></h3>
                                <li class="tamaño_icon_not"><i class="fas fa-map-marker-alt icon_noti"></i>Ubicación</li>
                            <p>Pequeña descripción</p>
                        </div>
                    </div>
                    <div class="col-md-2 border border-secondary cont_general">
                        <div class="cont_precio">
                            <ul class="list_aline">
                                <li class="estilo_letra_list"><a style="color:gray;" class="precio_style">$Precio</a></li>
                                <li class="cont_bott_noticia"><a class="boton_style" href="detalle_inmueble.php">Ver Más</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 border border-secondary cont_ico_noti">
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