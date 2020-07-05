<footer class="position-relative site__footer p-0">
    <div class="site-footer">
        <div class="container">
            <div class="site-footer__widgets">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="site-footer__widget footer-contacts">
                            <h5 class="footer-contacts__title">Contactos</h5>
                            <div class="footer-contacts__text">Te dejo mis datos para poder comunicarnos.</div>
                            <ul class="footer-contacts__contacts">
                                <li><i class="footer-contacts__icon fas fa-globe-americas"></i> Dirección de domicilio
                                </li>
                                <li><i class="footer-contacts__icon far fa-envelope"></i> prueba@correo.com</li>
                                <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> (01) 999919898</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">Información</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="trayectoria.php" class="footer-links__link">Trayectoria</a></li>
                                <li class="footer-links__item"><a href="catalogue.php" class="footer-links__link">Catálogo</a></li>
                                <li class="footer-links__item"><a href="gallery.php" class="footer-links__link">Galeria</a></li>
                                <li class="footer-links__item"><a href="contacts.php" class="footer-links__link">Contáctanos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">Contenido</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="" class="footer-links__link">Fotos</a></li>
                                <li class="footer-links__item"><a href="" class="footer-links__link">Videos</a></li>
                                <li class="footer-links__item"><a href="" class="footer-links__link">Artículos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="site-footer__widget footer-newsletter">
                            <h5 class="footer-newsletter__title">Conexiones</h5>
                            <div class="footer-newsletter__text">También puedes contactarme a través de mis redes
                                sociales</div>
                            <div class="footer-newsletter__text footer-newsletter__text--social">Síguenos en las redes
                                sociales</div><!-- social-links -->
                            <div class="social-links footer-newsletter__social-links social-links--shape--circle">
                                <ul class="social-links__list">
                                    <li class="social-links__item"><a class="social-links__link social-links__link--type--rss" href="" target="_blank"><i class="fas fa-rss"></i></a></li>
                                    <li class="social-links__item"><a class="social-links__link social-links__link--type--youtube" href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    <li class="social-links__item"><a class="social-links__link social-links__link--type--facebook" href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-links__item"><a class="social-links__link social-links__link--type--twitter" href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-links__item"><a class="social-links__link social-links__link--type--instagram" href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div><!-- social-links / end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="totop">
            <div class="totop__body">
                <div class="totop__start"></div>
                <div class="totop__container container"></div>
                <div class="totop__end"><button type="button" class="totop__button"><svg width="13px" height="8px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-up-13x8"></use>
                        </svg></button></div>
            </div>
        </div>
    </div>
</footer>
<?php include_once('mvc/view/layouts/modalDetalle.php') ?>
<!-- js -->
<script src="vendor\jquery\jquery.min.js"></script>
<script src="vendor\bootstrap\js\bootstrap.bundle.min.js"></script>
<script src="vendor\owl-carousel\owl.carousel.min.js"></script>
<script src="vendor\nouislider\nouislider.min.js"></script>
<script src="vendor\photoswipe\photoswipe.min.js"></script>
<script src="vendor\photoswipe\photoswipe-ui-default.min.js"></script>
<script src="vendor\select2\js\select2.min.js"></script>
<script src="js\number.js"></script>
<script src="js\main.js"></script>
<script src="js\header.js"></script>
<script src="js\json.js"></script>
<script src="js\modal.js"></script>
<script src="vendor\svg4everybody\svg4everybody.min.js"></script>
<script src="js\LoadInicialMultimedia.js"></script>
<script src="js/plugins.js"></script>
<script src="js/mainAnterior.js"></script>
<script>
    function solicitudProducto(valor) {
        debugger;
        var cantidad = $("#product-quantity").val();
        var idProducto = valor.id;
        var loc = window.location;
        var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf("/") + 1);
        window.location.href = pathName + "checkout.php?idProducto=" + idProducto + "&cantidad=" + cantidad;
    }

    svg4everybody();
    $('.owl-carousel--home').owlCarousel({
        items: 1,
        navigation: true,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1500,
        mouseDrag: true,
        singleItem: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn'
    });

    function DetalleMultimedia(valor) {
        debugger;

        var Idgaleria = valor.attributes[0].value;
        var TipoMultimedia = valor.attributes[1].value;


        var accion = valor.attributes[2].value;
        var loc = window.location;
        var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);

        /* 1 -> Videos, 2 ->Fotos */
        if (TipoMultimedia == "2") {
            window.location.href = pathName + "Images.php?IdGaleria=" + Idgaleria;
        } else {
            if (accion == "1") {
                window.location.href = pathName + "triumphs.php?IdGaleria=" + Idgaleria;
            } else
                window.location.href = pathName + "videos.php?IdGaleria=" + Idgaleria;
        }
    }
</script>
<!-- Fin - js -->

</body>