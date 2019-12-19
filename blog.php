<?php require 'variables/variables.php';
$page = 'blog';
require 'controllers/noticiasController.php' ?> 
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

        <section id="noticias" class="margen_blok">
            <div class="container">
               
                <div class="col-md-12 row mt-5 espcio_contain">
                <?php if(isset($noticias_array)){
                        modelo_noticia($noticias_array);
                    }else{
                        echo '<div class="col 12 cont_publicar ">
                        <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                        </div>';
                    }
                    ?>
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