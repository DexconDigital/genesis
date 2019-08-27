<?php require 'variables/variables.php';
$page = 'quienes' ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>

    <title>Quienes Somos</title>
</head>

<body>
    <div class="container-fluit-body">
        <section id="menu">
            <?php include 'layout/menu.php' ?>
        </section>

        <section id="somos" class="margen_servicios">
            <div class="col-md-12 mt-5">
                <div class="col-12">
                    <h1 class="text-center gruesor_letra"><?php echo $texto_quienes_somos['quienes_somos']['titulo'] ?></h1>
                    <div class="linea_decora"></div>
                </div>
                <div class="container" style="text-align: justify; margin-top: 39px;">
                    <p><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][0] ?></p>
                    <p><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][1] ?></p>
                </div>
                <div class="container">
                    <div class="col-md-12 row">
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="images/no_image.png" alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="images/no_image.png" alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="images/no_image.png" alt="Card image cap">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="hacemos">
            <div class=" container  mt-5 wow fadeInRight">
                <div class="col-12 ">
                    <h1 class="text-center gruesor_letra"><?php echo $texto_quienes_somos['que_hacemos']['titulo'] ?></h1>
                    <div class="linea_decora"></div>
                </div>
                <div class="col-md-12 row mt-5">
                    <div class="col-md-8">
                        <div id="cuadro_cards" class="extra-info-text margin-control col-lg-12 col-md-12 col-sm-12 ">
                            <p><?php echo $texto_quienes_somos['que_hacemos']['parrafo'] ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight">
                        <?php $r = $texto_quienes_somos['que_hacemos'];
                        echo '
               <img src="' . $r['imagen'] . '" class="w-100" alt="">'; ?>
                    </div>
                </div>
            </div>
            <div class=" container  mt-5 wow fadeInLeft">
                <div class="col-12">
                    <h1 class="text-center gruesor_letra"><?php echo $texto_quienes_somos['hacia_donde_vamos']['titulo'] ?></h1>
                    <div class="linea_decora"></div>
                </div>
                <div class="col-md-12 row mt-5">
                    <div class="col-md-4">
                        <?php $r = $texto_quienes_somos['hacia_donde_vamos'];
                        echo '
               <img src="' . $r['imagen'] . '" class="w-100" alt="">'; ?>

                    </div>
                    <div class="col-md-8">
                        <div id="cuadro_cards" class="extra-info-text margin-control col-lg-12 col-md-12 col-sm-12">
                            <p><?php echo $texto_quienes_somos['hacia_donde_vamos']['parrafo'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" container  mt-5">
                <div class="col-12  ">
                    <h1 class="text-center gruesor_letra">Nuestros Asesores</h1>
                    <div class="linea_decora"></div>
                </div>
                <div class="col-md-12 row mt-5">
                    <div class="col-md-4">
                        <div class="single-agent property">
                            <div class="property-image">
                                <a><img style="object-fit: contain;width: 100%;" src="images/no_image.png" alt=""></a>
                            </div>
                            <div class=" ">
                                <div class="overlay">
                                    <ul class="additional-info">
                                        <li>
                                            <header>Celular:</header>

                                        </li>
                                        <li>
                                            <header>Correo:</header>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="asesor_style mt-3">
                            <h3><a>Nombre Apellido</a></h3>
                            <p class="designation">Cargo</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-agent property">
                            <div class="property-image">
                                <a><img style="object-fit: contain;width: 100%;" src="images/no_image.png" alt=""></a>
                            </div>
                            <div class=" ">
                                <div class="overlay">
                                    <ul class="additional-info">
                                        <li>
                                            <header>Celular:</header>

                                        </li>
                                        <li>
                                            <header>Correo:</header>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="asesor_style mt-3">
                            <h3><a>Nombre Apellido</a></h3>
                            <p class="designation">Cargo</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-agent property">
                            <div class="property-image">
                                <a><img style="object-fit: contain;width: 100%;" src="images/no_image.png" alt=""></a>
                            </div>
                            <div class=" ">
                                <div class="overlay">
                                    <ul class="additional-info">
                                        <li>
                                            <header>Celular:</header>

                                        </li>
                                        <li>
                                            <header>Correo:</header>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="asesor_style mt-3">
                            <h3><a>Nombre Apellido</a></h3>
                            <p class="designation">Cargo</p>
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