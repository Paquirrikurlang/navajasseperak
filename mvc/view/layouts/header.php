<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Navajas Seperak</title>
    <!--  <link rel="icon" type="image/png" href="images\favicon.png"> fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
    <link rel="stylesheet" href="vendor\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="vendor\owl-carousel\assets\owl.carousel.min.css">
    <link rel="stylesheet" href="vendor\photoswipe\photoswipe.css">
    <link rel="stylesheet" href="vendor\photoswipe\default-skin\default-skin.css">
    <link rel="stylesheet" href="vendor\select2\css\select2.min.css">
    <link rel="stylesheet" href="css\style.css"><!-- font - fontawesome -->
    <link rel="stylesheet" href="css\styleExtra.css"><!-- font - fontawesome -->
    <link rel="stylesheet" href="vendor\fontawesome\css\all.min.css"><!-- font - stroyka -->
    <link rel="stylesheet" href="fonts\stroyka\stroyka.css">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-97489509-6');
    </script>
</head>
<!-- mobile site__header -->
<header class="position-relative site__header d-lg-none">
    <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
    <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
        <div class="mobile-header__panel">
            <div class="container">
                <div class="mobile-header__body">
                    <button class="mobile-header__menu-button">
                        <svg width="18px" height="14px">
                            <use xlink:href="images/sprite.svg#menu-18x14"></use>
                        </svg>
                    </button>
                    <a class="mobile-header__logo" href="index.html">
                        <!-- mobile-logo -->
                        <h7>GALPÓN PAQUIRRI</h7>
                        <!-- mobile-logo / end -->
                    </a>
                    <div class="search search--location--mobile-header mobile-header__search">
                        <div class="search__body">
                            <form class="search__form" action=""><input class="search__input" name="search" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off"> <button class="search__button search__button--type--submit" type="submit"><svg width="20px" height="20px">
                                        <use xlink:href="images/sprite.svg#search-20"></use>
                                    </svg></button> <button class="search__button search__button--type--close" type="button"><svg width="20px" height="20px">
                                        <use xlink:href="images/sprite.svg#cross-20"></use>
                                    </svg></button>
                                <div class="search__border"></div>
                            </form>
                            <div class="search__suggestions suggestions suggestions--location--mobile-header"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin - data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
</header>
<!-- mobile site__header / end -->

<!-- desktop site__header -->
<header class="site__header d-lg-block d-none">
    <div class="site-header">
        <div class="site-header__middle container">
            <div class="site-header__logo">
                <a href="index.php">
                    <h3>GALPÓN PAQUIRRI</h3>
                </a>
            </div>
            <div class="site-header__search">
                <div class="search search--location--header">
                    <div class="search__body">
                        <form class="search__form mb-0" action=""><input class="search__input" name="search" placeholder="Buscar información" aria-label="Site search" type="text" autocomplete="off"> <button class="search__button search__button--type--submit" type="submit"><svg width="20px" height="20px">
                                    <use xlink:href="images/sprite.svg#search-20"></use>
                                </svg></button>
                            <div class="search__border"></div>
                        </form>
                        <div class="search__suggestions suggestions suggestions--location--header"></div>
                    </div>
                </div>
            </div>
            <div class="site-header__phone">
                <div class="site-header__phone-title">Servicio al Cliente</div>
                <div class="site-header__phone-number">(01) 999919898</div>
            </div>
        </div>
        <div class="site-header__nav-panel">
            <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
            <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
                <div class="nav-panel__container container">
                    <div class="nav-panel__row">
                        <div class="nav-panel__nav-links nav-links">
                            <ul class="nav-links__list">
                                <li class="nav-links__item nav-links__item--has-submenu">
                                    <a class="nav-links__item-link" href="./index.php">
                                        <div class="nav-links__item-body">
                                            Inicio
                                            <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-links__item nav-links__item--has-submenu">
                                    <a class="nav-links__item-link" href="trayectoria.php">
                                        <div class="nav-links__item-body">
                                            Trayectoría
                                            <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-links__item nav-links__item--has-submenu">
                                    <a class="nav-links__item-link" href="catalogue.php">
                                        <div class="nav-links__item-body">
                                            Catálogo
                                            <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-links__item nav-links__item--has-submenu">
                                    <a class="nav-links__item-link" href="gallery.php">
                                        <div class="nav-links__item-body">
                                            Galería
                                            <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-links__item nav-links__item--has-submenu">
                                    <a class="nav-links__item-link" href="contacts.php">
                                        <div class="nav-links__item-body">
                                            Contáctanos
                                            <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin - data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
        </div>
        <!-- quickview-modal -->
        <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="quickview">
                        <button class="quickview__close" type="button"><svg width="20px" height="20px">
                                <use xlink:href="images/sprite.svg#cross-20"></use>
                            </svg>
                        </button>
                        <div class="product product--layout--quickview" data-layout="quickview">
                            <div class="product__content">
                                <!-- .product__gallery -->
                                <div class="product__gallery">
                                    <div class="product-gallery">
                                        <div class="product-gallery__featured">
                                            <button class="product-gallery__zoom">
                                                <svg width="24px" height="24px">
                                                    <use xlink:href="images/sprite.svg#zoom-in-24"></use>
                                                </svg>
                                            </button>
                                            <div class="owl-carousel owl-loaded owl-drag" id="product-image">
                                                <div class="owl-stage-outer">
                                                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2656px;">
                                                        <div class="owl-item active" style="width: 531.007px;">
                                                            <div class="product-image product-image--location--gallery">
                                                                <a href="images\navajas\colaDeRata.png" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                    <img class="product-image__img" src="images\navajas\olivo.png" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item" style="width: 531.007px;">
                                                            <div class="product-image product-image--location--gallery">
                                                                <a href="images\navajas\filipina.png" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                    <img class="product-image__img" src="images\navajas\filipina.png" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item" style="width: 531.007px;">
                                                            <div class="product-image product-image--location--gallery">
                                                                <a href="images\navajas\mediaO.png" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                    <img class="product-image__img" src="images\navajas\mediaO.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item" style="width: 531.007px;">
                                                            <div class="product-image product-image--location--gallery">
                                                                <a href="images\navajas\olivoCurva.png" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                    <img class="product-image__img" src="images\navajas\olivoCurva.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item" style="width: 531.007px;">
                                                            <div class="product-image product-image--location--gallery">
                                                                <a href="images\navajas\spk.png" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                    <img class="product-image__img" src="images\navajas\spk.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                                                <div class="owl-dots disabled"></div>
                                            </div>
                                        </div>
                                        <div class="product-gallery__carousel">
                                            <div class="owl-carousel owl-loaded owl-drag" id="product-carousel">
                                                <div class="owl-stage-outer">
                                                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 545px;">
                                                        <div class="owl-item active" style="width: 99px; margin-right: 10px;"><a href="images\navajas\olivo.png" class="product-image product-gallery__carousel-item product-gallery__carousel-item--active">
                                                                <div class="product-image__body">
                                                                    <img class="product-image__img product-gallery__carousel-image" src="images\navajas\olivo.png" alt=""></div>
                                                            </a></div>
                                                        <div class="owl-item active" style="width: 99px; margin-right: 10px;"><a href="images\navajas\filipina.png" class="product-image product-gallery__carousel-item">
                                                                <div class="product-image__body">
                                                                    <img class="product-image__img product-gallery__carousel-image" src="images\navajas\filipina.png" alt=""></div>
                                                            </a></div>
                                                        <div class="owl-item active" style="width: 99px; margin-right: 10px;"><a href="images\navajas\mediaO.png" class="product-image product-gallery__carousel-item">
                                                                <div class="product-image__body">
                                                                    <img class="product-image__img product-gallery__carousel-image" src="images\navajas\mediaO.png" alt=""></div>
                                                            </a></div>
                                                        <div class="owl-item active" style="width: 99px; margin-right: 10px;"><a href="images\navajas\olivoCurva.png" class="product-image product-gallery__carousel-item">
                                                                <div class="product-image__body">
                                                                    <img class="product-image__img product-gallery__carousel-image" src="images\navajas\olivoCurva.png" alt=""></div>
                                                            </a></div>
                                                        <div class="owl-item active" style="width: 99px; margin-right: 10px;"><a href="images\navajas\spk.png" class="product-image product-gallery__carousel-item">
                                                                <div class="product-image__body">
                                                                    <img class="product-image__img product-gallery__carousel-image" src="images\navajas\spk.png" alt=""></div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                                                <div class="owl-dots disabled"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .product__gallery / end -->
                                <!-- .product__info -->
                                <div class="product__info">
                                    <div class="product__wishlist-compare">
                                        <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <h1 class="product__name">
                                        Navaja Olivo
                                    </h1>

                                    <div class="product__description">
                                        Esta navaja tiene un diseño ideal para el tipo de pleito
                                        que va y pega sin demora, gallso de aire y buen registro, además
                                        cae perfectamente en gallos que tienen buena conformación.
                                        que va y pega sin demora, gallso de aire y buen registro, además
                                        cae perfectamente en gallos que tienen buena conformación.
                                        cae perfectamente en gallos que tienen buena.
                                    </div>
                                    <ul class="product__features">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                    <ul class="product__meta">
                                        <li class="product__meta-availability">
                                            Disponibilidad: <span class="text-success">En Stock</span>
                                        </li>
                                        <li>Marca: <a href="">Seperak</a></li>
                                        <li>SKU: 0001</li>
                                    </ul>
                                </div>
                                <!-- .product__info / end -->
                                <!-- .product__sidebar disabled="disabled"-->
                                <div class="product__sidebar">
                                    <div class="product__availability">
                                        Disponibilidad: <span class="text-success">En Stock</span>
                                    </div>
                                    <div class="product__prices">S/100.00</div>
                                    <!-- .product__options -->
                                    <form class="product__options">
                                        <div class="form-group product__option">
                                            <label class="product__option-label">Material</label>
                                            <div class="input-radio-label">
                                                <div class="input-radio-label__list">
                                                    <label><input type="radio" name="material">
                                                        <span>Metal</span></label>
                                                    <label><input type="radio" name="material">
                                                        <span>Madera</span></label>
                                                    <label><input type="radio" name="material">
                                                        <span>Plástico</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group product__option">
                                            <label class="product__option-label" for="product-quantity">Cantidad</label>
                                            <div class="product__actions">
                                                <div class="product__actions-item">
                                                    <div class="input-number product__quantity">
                                                        <input id="product-quantity" class="input-number__input form-control form-control-lg" type="number" min="1" value="1">
                                                        <div class="input-number__add"></div>
                                                        <div class="input-number__sub"></div>
                                                    </div>
                                                </div>
                                                <div class="product__actions-item product__actions-item--addtocart">
                                                    <button class="btn btn-primary btn-lg">
                                                        Agregar al Carrito
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- .product__options / end -->
                                </div>
                                <!-- .product__end -->
                                <div class="product__footer">
                                    <div class="product__tags tags">
                                        <div class="tags__list">
                                            <a href="catalogue.php">Ver Catálogo</a>
                                        </div>
                                    </div>
                                    <div class="product__share-links share-links">
                                        <ul class="share-links__list">
                                            <li class="share-links__item share-links__item--type--like">
                                                <a href="">Like</a>
                                            </li>
                                            <li class="share-links__item share-links__item--type--tweet">
                                                <a href="">Tweet</a>
                                            </li>
                                            <li class="share-links__item share-links__item--type--pin">
                                                <a href="">Pin It</a>
                                            </li>
                                            <li class="share-links__item share-links__item--type--counter">
                                                <a href="">4K</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- quickview-modal / end -->
        <!-- mobilemenu -->
        <div class="mobilemenu">
            <div class="mobilemenu__backdrop"></div>
            <div class="mobilemenu__body">
                <div class="mobilemenu__header">
                    <div class="mobilemenu__title">Menu</div>
                    <button type="button" class="mobilemenu__close">
                        <svg width="20px" height="20px">
                            <use xlink:href="images/sprite.svg#cross-20"></use>
                        </svg>
                    </button>
                </div>
                <div class="mobilemenu__content">
                    <ul class="mobile-links mobile-links--level--0" data-collapse="" data-collapse-opened-class="mobile-links__item--open">
                        <li class="mobile-links__item" data-collapse-item="">
                            <div class="mobile-links__item-title">
                                <a href="index.php" class="mobile-links__item-link">Inicio</a>
                            </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item="">
                            <div class="mobile-links__item-title">
                                <a href="trayectoria.php" class="mobile-links__item-link">Trayectoria</a>
                            </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item="">
                            <div class="mobile-links__item-title">
                                <a href="catalogue.php" class="mobile-links__item-link">Catálogo</a>
                            </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item="">
                            <div class="mobile-links__item-title">
                                <a href="gallery.php" class="mobile-links__item-link">Mi Biografía</a>
                            </div>
                        </li>
                        <li class="mobile-links__item" data-collapse-item="">
                            <div class="mobile-links__item-title">
                                <a href="contacts.php" class="mobile-links__item-link">Contáctanos</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- mobilemenu / end -->
        <!-- photoswipe -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>--> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- photoswipe / end -->
    </div>
</header>
<!-- desktop site__header / end -->
<!-- site__body -->