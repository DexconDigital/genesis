<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src= 'js/scripts.js'></script>
<script src="js/mdb.js"></script>
<script src="js/mdb.min.js"></script>
<script src="js/popper.min.js"></script>
<script> src="js/bootstrap.js"</script>
<script> src="js/bootstrap.min.js"</script>

 <script>new WOW().init();</script>
 
<?php if($page == 'Inicio' || $page="Inmuebles"){
    echo '<script src="conexion_api/token_api.js"></script>';
    echo '<script src="conexion_api/validadores.js"></script>';
    echo '<script src="conexion_api/buscador.js"></script>';
}?>

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})

</script>


