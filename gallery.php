<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once('mvc/view/layouts/header.php') ?>
<div class="site">
    <!-- site__body -->
    <div class="site__body">
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg></li>
                            <li class="breadcrumb-item active" aria-current="page">Galería</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>Galería</h1>
                </div>
            </div>
        </div>
        <!-- .block-slideshow -->
        <div class="container">
            <div class="row">
                <div class="d-none col-lg-12">
                    <div class="product-sidebar-area pr-30">
                        <div class="products-view__options">
                            <div class="view-options view-options--offcanvas--always">
                                <div class="view-options__divider"></div>
                                <div class="view-options__control">
                                    <label for="">Ordenado por</label>
                                    <div>
                                        <select class="form-control form-control-sm" name="" id="">
                                            <option value="">Videos</option>
                                            <option value="">Fotos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="view-options__control"><label for="">Mostrar</label>
                                    <div>
                                        <select class="form-control form-control-sm" name="" id="">
                                            <option value="">Selección</option>
                                            <option value="">Mis Gallos</option>
                                            <option value="">Personales</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-hm-wrapper ">
                        <div class="blog-img">
                            <a IdGaleria="1" TipoMultimedia="2" accion="0" onclick="DetalleMultimedia(this)" title="Eventos en todo el Perú">
                                <img src="images/blog/eventos.jpg" alt="Eventos en todo el Perú">
                            </a>
                            <div class="blog-date">
                                <h4>24 Julio, 2019</h4>
                            </div>
                        </div>
                        <div class="blog-hm-content">
                            <h3>
                                <a IdGaleria="1" TipoMultimedia="2" accion="0" onclick="DetalleMultimedia(this)" title="Eventos en todo el Perú">
                                    Eventos en todo el Perú
                                </a>
                            </h3>
                            <p><span>GALLERO</span> te invito a ver los eventos donde participamos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-hm-wrapper ">
                        <div class="blog-img">
                            <a IdGaleria="2" TipoMultimedia="2" accion="0" onclick="DetalleMultimedia(this)" title="Marchas">
                                <img src="images/marchas/ma1.jpg" alt="Marchas">
                            </a>
                            <div class="blog-date">
                                <h4>22 Agosto, 2019</h4>
                            </div>
                        </div>
                        <div class="blog-hm-content">
                            <h3>
                                <a IdGaleria="2" TipoMultimedia="2" accion="0" onclick="DetalleMultimedia(this)" title="Marchas">
                                    Marchas
                                </a>
                            </h3>
                            <p><span>GALLERO</span> revisa la marcha gallera. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-hm-wrapper ">
                        <div class="blog-img">
                            <a IdGaleria="3" TipoMultimedia="2" accion="0" onclick="DetalleMultimedia(this)" title="Viajes realizados">
                                <img src="images/blog/viajes.jpg" alt="Viajes realizados">
                            </a>
                            <div class="blog-date">
                                <h4>25 Agosto, 2019</h4>
                            </div>
                        </div>
                        <div class="blog-hm-content">
                            <h3>
                                <a IdGaleria="3" TipoMultimedia="2" accion="0" onclick="DetalleMultimedia(this)" title="Viajes realizados">
                                    Viajes realizados
                                </a>
                            </h3>
                            <p><span>GALLERO</span> comparte nuestros viajes por el mundo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-hm-wrapper ">
                        <div class="blog-img">
                            <a IdGaleria="4" TipoMultimedia="2" accion="0" onclick="DetalleMultimedia(this)" title="Fotos de mi galpón">
                                <img src="images/blog/galpon.jpg" alt="Fotos de mi galpón">
                            </a>
                            <div class="blog-date">
                                <h4>27 Agosto, 2019</h4>
                            </div>
                        </div>
                        <div class="blog-hm-content">
                            <h3>
                                <a IdGaleria="4" TipoMultimedia="2" accion="0" onclick="DetalleMultimedia(this)" title="Fotos de mi galpón">
                                    Fotos de mi galpón
                                </a>
                            </h3>
                            <p><span>GALLERO</span> GALLERO, pasa y conoce el Galpón Paquirri.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-hm-wrapper ">
                        <div class="blog-img">
                            <a IdGaleria="6" TipoMultimedia="1" accion="0" onclick="DetalleMultimedia(this)" title="Videos de mis peleas">
                                <img src="images/blog/peleas.jpg" alt="Videos de mis peleas">
                            </a>
                            <div class="blog-date">
                                <h4>22 Septiembre, 2019</h4>
                            </div>
                        </div>
                        <div class="blog-hm-content">
                            <h3>
                                <a IdGaleria="6" TipoMultimedia="1" accion="0" onclick="DetalleMultimedia(this)" title="Videos de mis peleas">
                                    Videos de mis peleas
                                </a>
                            </h3>
                            <p><span>GALLERO</span> te invito a ver los videos de las mejores peleas de los gallos
                                Paquirri. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-hm-wrapper ">
                        <div class="blog-img">
                            <a IdGaleria="5" TipoMultimedia="1" accion="1" onclick="DetalleMultimedia(this)" title="Mis logros en los gallos">
                                <img src="images/blog/logros.jpg" alt="Mis logros en los gallos">
                            </a>
                            <div class="blog-date">
                                <h4>28 Septiembre, 2019</h4>
                            </div>

                        </div>
                        <div class="blog-hm-content">
                            <h3>
                                <a IdGaleria="5" TipoMultimedia="1" accion="1" onclick="DetalleMultimedia(this)" title="Mis logros en los gallos">
                                    Mis logros en los gallos
                                </a>
                            </h3>
                            <p><span>GALLERO</span> disfruta conmigo de los triunfos obtenidos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-slideshow / end -->
    </div>
    <!-- site__body / end -->
</div>
<?php include_once('mvc/view/layouts/footer.php') ?>

</html>