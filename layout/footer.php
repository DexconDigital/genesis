<i class="fas fa-angle-double-up subir"></i>
<footer>
                <div>
                    <div class="container  mt-5">
                        <div class="row" style="padding: 25px;">
                            <div class=" col-xl-3 col-md-6 col-12 ">
                                <div>
                                    <h2 class="footer_elem_uno"  > G.A. Inmobiliaria</h2>
                                    <p style="    text-align: inherit;color: white;"><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][0]?></p>
                                </div>
                                <div style="    margin-top: 35px;">
                                    <ul>
                                        <a href="<?php echo $redes_sociales ['facebook']['link']?>" target="_blank" >
                                            <li class="fab fa-facebook-f estilo_icono_foot " style="display: inline-block;margin-right: 5px;"></li>
                                        </a>
                                        <a href="<?php echo $redes_sociales ['instagram']['link']?>" target="_blank">
                                            <li class="fab fa-instagram estilo_icono_foot" style="display: inline-block;margin-right: 5px;"></li>
                                        </a>
                                        <a href="<?php echo $redes_sociales ['twitter']['link']?>" target="_blank">
                                            <li class="fab fa-twitter estilo_icono_foot" style="display: inline-block;margin-right: 5px;"></li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                            <div class=" col-xl-3 col-md-6 col-12 ">
                                <div>
                                    <h2 class="footer_elem_uno" >Formularios</h2>

                                </div>
                                <div class="">
                                    <nav style="display: block;">
                                        <ul style="text-align: left;list-style: outside none none;margin: 0;padding: 0;">
                                            <li class="li_footer"><a class="a_footer" href="archivos/Natural.pdf" download="Libertador Persona Natural.pdf" ><i style="color: #6fb81f;" class="fa fa-angle-right mr-2"></i>Libertador Persona Natural</a></li>
                                            <li class="li_footer"><a class="a_footer" href="archivos/Juridica.pdf" download="Libertador Persona Jurídica.pdf"><i style="color: #6fb81f;" class="fa fa-angle-right mr-2"></i>Libertador Persona Jurídica</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class=" col-xl-3 col-md-6 col-12 ">
                                <div>
                                    <h2 class="footer_elem_uno" >Ubícanos</h2>

                                </div>
                                <div class="row" style=" position: relative;height: 82%;">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6105356778453!2d-74.06044668555337!3d4.663327743279707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a5edbe0bf49%3A0x936d31bf17fc020e!2sCl.+77+%2314-19%2C+Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1566400574822!5m2!1ses-419!2sco" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-3">
                                <a class="btn" href="https://www.google.com/maps/place/Cl.+77+%2314-19,+Bogot%C3%A1/@4.6633224,-74.0604467,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f9a5edbe0bf49:0x936d31bf17fc020e!8m2!3d4.6633224!4d-74.058258" name="submitNewsletter" target="_blank" style="background-color:#99cf16;padding:2px;margin-left: auto;margin-right: auto;" class="btn rounded-0 col-md-12 waves-effect waves-light" name=""><span class="tamaño_botton">Como llegar</span></a>
                                </div>
                            </div>
                            <div class=" col-xl-3 col-md-6 col-12 ">
                                <div>
                                    <h2 class="footer_elem_uno">Contáctanos</h2>
                                </div>
                                <div class="">
                                    <p class="footer-border-bottom"><a style="color: white;" class="color_a_foot"><i class="fas fa-map-marker-alt contac_foot"></i><?php echo $datos_contacto['direccion']['direccion'] ?></a></p>
                                    <p class="footer-border-bottom"><a class="color_a_foot" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fa fa-phone contac_foot"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a></p>
                                    <p class="footer-border-bottom"><a class="color_a_foot" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt contac_foot"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a></p>
                                    <p class="footer-border-bottom"><a class="color_a_foot" target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"><i class="fab fa-whatsapp contac_foot"></i><?php echo $datos_contacto['whatsapp']['imprimir'] ?></a></p>
                                    <p class="footer-border-bottom"><a class="style_correo" href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"><i class="far fa-envelope contac_foot"></i><?php echo $datos_contacto['correo']['correo'] ?></a></p>
                                    <p class="footer-border-bottom" style="color:white;"><a class="color_a_foot" ><i class="fas fa-calendar-alt contac_foot"></i><?php echo $datos_contacto['horario']['horario'] ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-area" style="background: #000000;">
                    <div class="container  text-center p-2">
                        <p class="copy_style">Copyright © 2019 <a class="color_a_foot_imper" href="https://www.dexcondigital.com/">Dexcon Digital.</a>Todos los derechos reservados.</p>
                    </div>
                </div>
            </footer>