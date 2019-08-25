<?php require 'variables/variables.php';
$page = 'contactos' ?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'layout/archivosheader.php' ?>

    <title>Contactos</title>
</head>

<body>
    <div class="container-fluit-body">
        <section id="menu">
            <?php include 'layout/menu.php' ?>
        </section>

        <section id="mapa" class="margen_contacto">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6105356778453!2d-74.06044668555337!3d4.663327743279707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a5edbe0bf49%3A0x936d31bf17fc020e!2sCl.+77+%2314-19%2C+Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1566497166353!5m2!1ses!2sco" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <div class="contenedor-overlay">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container  contenido_contac">

                <div class="col md-12 row ">
                    <div class="col-md-5 ">
                        <div>
                            <h3 class="h3_contac">Información de Contacto</h3>
                            <nav class="nav_list">
                                <ul class="form_contac">
                                    <li class="info_contac"><i class="fas fa-map-marker-alt icono_contac"><a class="color_a_foot_black"></i><?php echo $datos_contacto['direccion']['direccion']?></li></a>
                                    <li class="info_contac"><i class="fas fa-phone icono_contac"></i><a class="color_a_foot_black" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><?php echo $datos_contacto['telefono_fijo']['imprimir']?></li></a><br>
                                    <li class="info_contac"><i class="fas fa-mobile-alt icono_contac"></i><a class="color_a_foot_black" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><?php echo $datos_contacto['celular']['imprimir']?></li></a><br>
                                    <li class="info_contac"><i class="fab fa-whatsapp icono_contac"></i><a class="color_a_foot_black" href="tel:<?php echo $datos_contacto['whatsapp']['link'] ?>"><?php echo $datos_contacto['whatsapp']['imprimir']?></li></a><br>
                                    <li class="info_contac"><i class="fas fa-calendar-alt icono_contac"></i><a class="color_a_foot_black" href=""><?php echo $datos_contacto['horario']['horario']?></li></a>

                                </ul>

                            </nav>
                        </div>
                    </div>
                    <div class="col-md-7 ">
                        <div>
                            <h3 class="h3_contac">Mensaje</h3>
                            <form action="">
                                <div class="col-md-12 row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Apellido">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Teléfono fijo ó celular">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Correo">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <select class="browser-default custom-select mb-4">
                                            <option value="" disabled>Asunto</option>
                                            <option value="1" selected> Solicitud de servicios</option>
                                            <option value="2"> Consignar Inmueble</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea cols="30" rows="10" class="textarea form-control" placeholder="Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                        <div class="custom-control custom-checkbox mb-4">
                                            <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                                            <label class="custom-control-label" for="defaultContactFormCopy">Confimo que he leído, entendido y acepto la<a class="color_a_foot_black" href=""> política de tratamiento de datos personales.</a></label>
                                        </div>
                                    </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <button style="background-color:#99cf16; padding: 6px;" type="button" class="btn rounded-0 col-5 waves-effect waves-light" name=""><span style="color:white">Enviar</span></button>
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