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
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\styleAnterior.css">
    <link rel="stylesheet" href="css\styleExtra.css">
    <link rel="stylesheet" href="vendor\fontawesome\css\all.min.css">
    <link rel="stylesheet" href="fonts\stroyka\stroyka.css">
    <style>
        .mb-45 {
            margin-bottom: 30px !important;
        }

        @media screen and (min-width: 992px) {
            .post-card__info {
                width: 100% !important;
            }
        }

        .display {
            display: none !important;
        }
    </style>

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

<body>
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