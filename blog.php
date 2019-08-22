<?php require 'variables/variables.php';
$page = 'blog' ?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>

    <title>Blog</title>
</head>

<body>
    <div class="container-fluit-body">
        <section id="menu">
            <?php include 'layout/menu.php' ?>
        </section>

        <section id="noticias">
            <div class="container mt-5">
               
                <div class="col-md-12 row mt-5">
                    <div class="col-md-4">
                        <div class="card" style="border-color: white;">
                            <img src="images/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body mt-4 espacio_tageta">
                                <h4 class="card-title"><strong>Titulo Noticia</strong></h4>
                                <p>23 Agosto 2019 / Admin</p>
                                <p style="border-bottom: 1px dashed #646464; margin-bottom: 30px;padding-bottom: 30px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button style="background-color:#99cf16;padding: 1px;" type="button" class="btn rounded-0 col-6" name=""><span style="color:white">ver más</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="border-color: white;">
                            <img src="images/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body espacio_tageta mt-4">
                                <h4 class="card-title"><strong>Titulo Noticia</strong></h4>
                                <p>23 Agosto 2019 / Admin</p>
                                <p style="border-bottom: 1px dashed #646464; margin-bottom: 30px;padding-bottom: 30px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button style="background-color:#99cf16;padding: 1px;" type="button" class="btn rounded-0 col-6" name=""><span style="color:white">ver más</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="border-color: white;">
                            <img src="images/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body espacio_tageta mt-4">
                                <h4 class="card-title"><strong>Titulo Noticia</strong></h4>
                                <p>23 Agosto 2019 / Admin</p>
                                <p style="border-bottom: 1px dashed #646464; margin-bottom: 30px;padding-bottom: 30px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button style="background-color:#99cf16;padding: 1px;" type="button" class="btn rounded-0 col-6" name=""><span style="color:white">ver más</span></button>
                            </div>
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