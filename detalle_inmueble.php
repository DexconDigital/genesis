<?php require 'variables/variables.php';
$page = 'detalle_inm';
require 'controllers/detalleInmuebleController.php' ?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>
    <link rel="stylesheet" href="./css/carousel.tamanos.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">

    <title>Detalle | Inmmueble</title>
</head>

<body>
    <div class="container-fluit-body">
        <section id="menu">
            <?php include 'layout/menu.php' ?>
        </section>

        <section class="margen_detalle_inm">
            <div class="container" style="margin-top: 40px;">
                <div class="col-md-12 row">
                    <div class="col-md-7">
                        <!-- main slider carousel items -->
                        <section class="mt-3" id="slide-detalle">
                            <?php
                            if (isset($r['fotos'])) {
                                for ($i = 0; $i < count($r['fotos']); $i++) {
                                    echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                }
                            } else {
                                echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                            }
                            ?>
                        </section>
                        <section class="vertical-center-4 slider" id="miniaturas">
                            <?php
                            if (isset($r['fotos'])) {
                                for ($i = 0; $i < count($r['fotos']); $i++) {
                                    echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                }
                            } else {
                                echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                            }
                            ?>
                        </section>
                        <!-- script para iniciar el caousel -->
                        <div id="referencia_inmueble" class="col-md-12 mt-3  ">
                            <h4 class="property-single-detail-title"><strong>Descripción</strong></h4>
                            <p style="text-align: justify;"><?php echo $descripcion?></p>
                        </div>
                        <?php
                        if (count($r['caracteristicasInternas']) > 0) {
                            echo
                                '<div class="col-md-12" style="margin-bottom: 12px;">
                                    <h4 class="property-single-detail-title"><strong>Caracteristicas Internas</strong></h4>
                                        <ul>';
                            for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                echo '<li>' . $caracteristicas . '</li>';
                            }
                                echo  '</ul>
                                </div>
                            ';
                        }
                        ?>
                        <?php
                        if (count($r['caracteristicasExternas']) > 0) {
                            echo
                                '<div class="col-md-12" style="margin-bottom: 12px;">
                                    <h4 class="property-single-detail-title"><strong>Caracteristicas Externas</strong></h4>
                                        <ul>';
                            for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                echo '<li>' . $caracteristicas . '</li>';
                            }
                                echo  '</ul>
                                </div>
                            ';
                        }
                        ?>

                        <?php
                        if (count($r['caracteristicasAlrededores']) > 0) {
                            echo
                                '<div class="col-md-12" style="margin-bottom: 12px;">
                                    <h4 class="property-single-detail-title"><strong>Caracteristicas de los alrededores</strong></h4>
                                        <ul>';
                            for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                echo '<li>' . $caracteristicas . '</li>';
                            }
                                echo  '</ul>
                                </div>
                            ';
                        }
                        ?>
                        
                        
                        <div class="col-md-12">
                            <!-- Video -->
                        </div>

                        <div class="col-md-12 p-0 pt-4">
                            <div class="row">
                                <div style="width: 100%;">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6105356778453!2d-74.06044668555337!3d4.663327743279707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a5edbe0bf49%3A0x936d31bf17fc020e!2sCl.+77+%2314-19%2C+Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1566400574822!5m2!1ses-419!2sco" width="" height="600" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <div>
                            <div class="search-box daily-email bg2 text-center">
                                <h5 class="titulo_similares" class="mb-0">Propiedades similares</h5>
                            </div>
                            <div class="lista_similares">
                                <ul class="marge_list_simi">
                                    <li class="li_similares">
                                        <div class="single-field">
                                            <div class="input-box">
                                                <input type="text" class="form-control" placeholder="Ciudad">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="li_similares">
                                        <div class="single-field">
                                            <div class="input-box">
                                                <input type="text" class="form-control" placeholder="Tipo de inmueble">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="li_similares">
                                        <div class="single-field">
                                            <div class="input-box">
                                                <input type="text" class="form-control" placeholder="Tipo de gestión">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cont_Boton_similares">
                                            <button style="padding: 4px;" type="button" class="btn btn-lg boton_similares">Buscar</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="search-box daily-email bg2 text-center">
                            <div>
                                <h5 class="titulo_similares" class="mb-0">Contacto con el asesor</h5>
                            </div>

                            <div class="contenedor_contact mt-3">
                                <figure class="cont_img">
                                    <img class="estulo_img_cont" src="<?php echo $asesor['FotoAsesor']?>" alt="">
                                </figure>
                                <ul class="icon_cont">
                                    <li><i class="fa fa-map-marker"></i> <?php echo $asesor['ntercero']?></li>
                                    <li><i class="fa fa-phone"></i> <?php echo $asesor['celular']?></li>
                                    <li><a><i class="fa fa-envelope"></i><?php echo $asesor['correo']?></a></li>
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
    <script src="js/slick.min.js"></script>
    <script>
        $('#slide-detalle').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '#miniaturas'
        });
        $('#miniaturas').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#slide-detalle',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>


</body>

</html>