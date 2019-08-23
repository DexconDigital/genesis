<?php require 'variables/variables.php';
$page = 'servicios' ?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>

    <title>Servicios</title>
</head>

<body>
    <div class="container-fluit-body">
        <section id="menu">
            <?php include 'layout/menu.php' ?>
        </section>

        <section id="servicios">
            <div class="container" style="margin-top: 52px;">
                <div class="col-md-12 row">
                    <div class="col-md-6  magen_container_servi wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="col-md-12  text-center">
                            <h1 class="color_servi gruesor_letra"><?php echo $texto_servicios['ventas']['titulo'] ?></h1>
                        </div>
                        <div class="col-md-12  ">
                            <p class="texto_servi"><?php echo $texto_servicios['ventas']['parrafos'][0] ?></p>
                        </div>
                    </div>
                    <div class="col-md-6   wow fadeInRight" data-wow-delay="0.6s">
                        <?php $r = $texto_servicios['ventas'];
                        echo '
                      <img style="width: 67%;" src="' . $r['imagen'] . '" alt="">'; ?>
                    </div>
                </div>
                <div class="col-md-12 row">
                    <div class="col-md-6  wow fadeInLeft" data-wow-delay="0.6s">
                        <?php $r = $texto_servicios['arriendos'];
                        echo '
                       <img style="width: 67%;margin-left: 36%;" src="' . $r['imagen'] . '" alt="">'; ?>
                    </div>
                    <div class="col-md-6  magen_container_servi wow fadeInRight"data-wow-delay="0.6s" >
                        <div class="col-md-12  text-center">
                            <h1 class="color_servi gruesor_letra"><?php echo $texto_servicios['arriendos']['titulo'] ?></h1>
                        </div>
                        <div class="col-md-12 ">
                            <p class="texto_servi"><?php echo $texto_servicios['arriendos']['parrafos'][0] ?></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 row">
                    <div class="col-md-6  magen_container_servi wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="col-md-12  text-center">
                            <h1 class="color_servi gruesor_letra"><?php echo $texto_servicios['avaluos']['titulo'] ?></h1>
                        </div>
                        <div class="col-md-12 ">
                            <p class="texto_servi"><?php echo $texto_servicios['avaluos']['parrafos'][0] ?></p>
                        </div>
                    </div>
                    <div class="col-md-6  wow fadeInRight" data-wow-delay="0.9s">
                        <?php $r = $texto_servicios['avaluos'];
                        echo '
                     <img style="width: 67%;" src="' . $r['imagen'] . '" alt="">'; ?>
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