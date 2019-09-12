<?php require 'variables/variables.php';
require 'controllers/inmueblesController.php';
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
    <div class="container-fluid body">
        <section id="menu">
            <?php include 'layout/menu.php' ?>
        </section>

        <section id="buscador" class="contenedor_busca margen_inmueble">
            <div class="container">
                <div class=" row col-12">
                    <div class="col-lg-3 col-md-6 col-12 margen_busca top_busca mt-3">
                        <input type="text" class="form-control rounded-0" id="codigo_buscar" placeholder="Código">
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 margen_busca top_busca mt-3">
                        <select id="ciudad_buscar" class="form-control rounded-0">
                            <option selected="" value="0">Ciudad</option>
                        </select>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 margen_busca top_busca">
                        <select id="barrio_buscar" class="form-control rounded-0">
                            <option selected="" value="0">Barrio</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 margen_busca top_busca">
                        <select id="tipo_gestion_buscar" class="form-control rounded-0">
                            <option selected="" value="0">Tipo de Gestión</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 margen_busca">
                        <select id="tipo_inmueble_buscar" class="form-control rounded-0">
                            <option selected="" value="0">Tipo de Inmueble</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 margen_busca"><input type="text" class="form-control rounded-0" id="precio_minimo_buscar" onkeyup="format(this)" onchange="format(this)" placeholder=" Precio Mínimo"></div>
                    <div class="col-lg-3 col-md-6 col-12 margen_busca"><input type="text" class="form-control rounded-0" id="precio_maximo_buscar" onkeyup="format(this)" onchange="format(this)" placeholder=" Precio Máximo"></div>
                    <div class="col-lg-3 col-md-6 col-12 margen_busca"><input type="text" class="form-control rounded-0" id="banios_buscar" placeholder=" Baños"></div>
                    <div class="col-lg-3 col-md-6 col-12 margen_busca"><input type="text" class="form-control rounded-0" id="alcobas_buscar" placeholder=" Habitaciones"></div>
                    <div class="col-lg-3 col-md-6 col-12 margen_busca"><input type="text" class="form-control rounded-0" id="garajes_buscar" placeholder=" Garajes"></div>
                    <div class="col-lg-3 col-md-6 col-12 margen_busca"><input type="text" class="form-control rounded-0" id="area_minima_buscar" placeholder=" Área Mínima"></div>
                    <div class="col-lg-3 col-md-6 col-12 margen_busca"><input type="text" class="form-control rounded-0" id="area_maxima_buscar" placeholder=" Área Máxima"></div>
                    <div class="col-lg-12 col-md-12 col-12 margen_busca"><button type="button" class="btn rounded-0 col-6 botoon_inmueble" id='buscar'><span style="color:white">Buscar</span></button></div>
                </div>


            </div>
        </section>

        <section id="lista_inmueble">

            <div class="container ">
                <div class="row">
                    <?php if (is_array($r)) {
                        modelo_inmueble_listar($r['Inmuebles']);
                    } else {
                        echo '<div class="col-12"><h2 class="text-center">No se encontraron inmuebles con su solictud</h2></div>';
                    }
                    ?>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <?php if (is_array($r)) : ?>
                            <div class="pagination-box text-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination align-items-end justify-content-center">
                                        <?php if ($paginator->getPrevUrl()) : ?>
                                            <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo;</a></li>
                                        <?php endif; ?>
                                        <?php foreach ($paginator->getPages() as $page) : ?>
                                            <?php if ($page['url']) : ?>
                                                <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                                    <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                                                </li>
                                            <?php else : ?>
                                                <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>

                                        <?php if ($paginator->getNextUrl()) : ?>
                                            <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link"> &raquo;</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

        </section>

        <section id="footer">
            <?php include 'layout/footer.php' ?>
        </section>

    </div>




    <script>
        var pagina = 'inmuebles';
    </script>
    <?php include('layout/archivosfooter.php'); ?>
    <script src="js/responisve-paginate.js"></script>



</body>

</html>