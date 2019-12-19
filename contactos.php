<?php require 'variables/variables.php';
$page = 'contacto' ?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>

    <title>Contáctanos</title>
</head>

<body>
    <div class="container-fluit-body">
        <section id="menu">
            <?php include 'layout/menu.php' ?>
        </section>

        <section id="mapa" class="margen_contacto">

            <div class="col-12 p-0">
                <div class="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6105356778453!2d-74.06044668555337!3d4.663327743279707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a5edbe0bf49%3A0x936d31bf17fc020e!2sCl.+77+%2314-19%2C+Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1566497166353!5m2!1ses!2sco" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <div class="contenedor-overlay">

                    </div>
                </div>
            </div>

        </section>

        <section>
            <div class="container  contenido_contac">

                <div class="col md-12 row ">
                    <div class="col-md-5 ">
                        <div>
                            <h3 class="h3_contac2">Información de Contacto</h3>
                            <nav class="nav_list">
                                <ul class="form_contac">
                                    <li class="info_contac"><i class="fas fa-map-marker-alt icono_contac"><a class="color_a_foot_white"></i><?php echo $datos_contacto['direccion']['direccion'] ?></li></a>
                                    <li class="info_contac"><i class="fas fa-phone icono_contac"></i><a class="color_a_foot_white" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></li></a><br>
                                    <li class="info_contac"><i class="fas fa-mobile-alt icono_contac"></i><a class="color_a_foot_white" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><?php echo $datos_contacto['celular']['imprimir'] ?></li></a><br>
                                    <li class="info_contac"><i class="fab fa-whatsapp icono_contac"></i><a class="color_a_foot_white" target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"><?php echo $datos_contacto['whatsapp']['imprimir'] ?></li></a><br>
                                    <li class="info_contac"><i class="fas fa-calendar-alt icono_contac"></i><a class="color_a_foot_white" href=""><?php echo $datos_contacto['horario']['horario'] ?></li></a>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-7 ">
                        <div>
                            <h3 class="h3_contac">Mensaje</h3>
                            <form action="email/enviarCorreo.php" method="Post">
                                <div class="col-md-12 row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombres" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="telefono" class="form-control" placeholder="Teléfono fijo ó celular" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Correo" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <select class="browser select custom-select mb-4" id="asunto" name="asunto">
                                            <option selected>Seleccione</option>
                                            <option value="Solicitud de servicios"> Solicitud de servicios</option>
                                            <option value="Consignación de Inmueble"> Consignar Inmueble</option>

                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea cols="28" rows="10" name="message" class="textarea form-control tamaño_tex_area" placeholder="Mensaje"></textarea>
                                    </div>
                                </div>
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox mb-4">
                                            <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy" required>
                                            <label class="custom-control-label" for="defaultContactFormCopy">Confimo que he leído, entendido y acepto la<a class="color_a_foot_black" href="Politica_de_datos.pdf" download="Politica de tratamiento de infromación.pdf"> política de tratamiento de datos personales.</a></label>
                                        </div>
                                    </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button style="background-color:#99cf16; padding: 6px;" type="submit" class="btn rounded-0 col-5 waves-effect waves-light" name=""><span style="color:white">Enviar</span></button>
                                    </div>

                                </div>

                            </form>
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