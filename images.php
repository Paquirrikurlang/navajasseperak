<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once('mvc/view/layouts/header.php') ?>
<link rel="stylesheet" id="compiled.css-css" href="https://z9t4u9f6.stackpathcdn.com/wp-content/themes/mdbootstrap4/css/compiled-4.19.1.min.css?ver=4.19.1" type="text/css" media="all">
<link rel="stylesheet" href="css/shared.css" type="text/css" />
<link rel="stylesheet" href="css/images.css" type="text/css" />
<main class="mx-auto p-0">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg></li>
                        <li class="breadcrumb-item active" aria-current="page">Imágenes</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Imágenes</h1>
            </div>
        </div>
    </div>
    <div class="container container__seccion__videos">
        <div class="row">
            <div class="col-12">
                <div class="products-view__options">
                    <div class="view-options view-options--offcanvas--always">

                        <div class="view-options__divider"></div>
                        <div class="view-options__control"><label for="">Orden de numeración</label>

                        </div>
                        <div class="view-options__control"><label for="">Mostrar</label>
                            <div><select id="cboCantidadSolicitada" name="cboCantidadSolicitada" class="form-control form-control-sm">
                                    <option value="12">12</option>
                                    <option value="24">24</option>
                                </select></div>
                        </div>
                    </div>
                </div>
                <section id="lightbox-1">
                    <div id="mdb-lightbox-ui">
                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="pswp__bg"></div>
                            <div class="pswp__scroll-wrap">
                                <div class="pswp__container" style="transform: translate3d(0px, 0px, 0px);">
                                    <div class="pswp__item" style="display: block; transform: translate3d(-956px, 0px, 0px);">
                                        <div class="pswp__zoom-wrap" style="transform: translate3d(0px, 64px, 0px) scale(1);">
                                            <img class="pswp__img" src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg">
                                        </div>
                                    </div>
                                    <div class="pswp__item" style="transform: translate3d(0px, 0px, 0px);">
                                        <div class="pswp__zoom-wrap" style="transform: translate3d(572.5px, 152.203px, 0px) scale(0.283427);">
                                            <img class="pswp__img" src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg">
                                        </div>
                                    </div>
                                    <div class="pswp__item" style="display: block; transform: translate3d(956px, 0px, 0px);">
                                        <div class="pswp__zoom-wrap" style="transform: translate3d(0px, 64px, 0px) scale(1);">
                                            <img class="pswp__img" src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg">
                                        </div>
                                    </div>
                                </div>
                                <div class="pswp__ui pswp__ui--fit pswp__ui--hidden pswp__ui--idle">
                                    <div class="pswp__top-bar">
                                        <div class="pswp__counter">3 / 9</div>
                                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                        <div class="pswp__preloader">
                                            <div class="pswp__preloader__icn">
                                                <div class="pswp__preloader__cut">
                                                    <div class="pswp__preloader__donut"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                    </button>
                                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                    </button>
                                    <div class="pswp__caption">
                                        <div class="pswp__caption__center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="lightbox-2">
                    <div id="mdb-lightbox-ui"></div>
                    <div class="row mdb-lightbox lista__galeria__imagenes" id="images" data-pswp-uid="1">
                    </div>
                </section>
                <section id="slides">
                </section>
            </div>
        </div>
        <div class="products-view__pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link page-link--with-arrow" href="" aria-label="Previous">
                        <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-left-8x13"></use>
                        </svg>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="">1</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="">2 <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link page-link--with-arrow" href="" aria-label="Next">
                        <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-right-8x13"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</main>
<?php include_once('mvc/view/layouts/footer.php') ?>
<script type="text/javascript" src="https://z9t4u9f6.stackpathcdn.com/wp-content/themes/mdbootstrap4/js/bundles/4.19.1/compiled.16.min.js?ver=4.19.1">
</script>
<script src="js\paginador.js"></script>
<script src="js/LoadImagenes.js"></script>

</html>