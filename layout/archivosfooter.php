<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mdb.js"></script>
<script src="js/mdb.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/scripts.js"></script>

<script>
    new WOW().init();
</script>

<?php if ($page == 'Inicio' || $page = "Inmuebles") {
    echo '<script src="conexion_api/token_api.js"></script>';
    echo '<script src="conexion_api/validadores.js"></script>';
    echo '<script src="conexion_api/buscador.js"></script>';
} ?>

<script>

</script>



<!-- Slider_Quines Somos -->
<script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
</script>