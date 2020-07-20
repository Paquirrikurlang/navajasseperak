<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Navajas Seperak</title>
    <!--  <link rel="icon" type="image/png" href="images\favicon.png"> fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <style>
        .mb-45 {
            margin-bottom: 30px !important;
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
                        <a class="mobile-header__logo" href="index.php">
                            <!-- mobile-logo -->
                            <h7>GALPÓN PAQUIRRI</h7>
                            <!-- mobile-logo / end -->
                        </a>
                        <div class="search search--location--mobile-header mobile-header__search">
                            <div class="search__body">
                                <form class="search__form" action=""><input class="search__input" name="search" placeholder="Busca el modelo de tu navaja" aria-label="Site search" type="text" autocomplete="off"> <button class="search__button search__button--type--submit" type="submit"><svg width="20px" height="20px">
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
                            <form class="search__form mb-0" action=""><input class="search__input" name="search" placeholder="Busca el modelo de tu navaja aquí" aria-label="Site search" type="text" autocomplete="off"> <button class="search__button search__button--type--submit" type="submit"><svg width="20px" height="20px">
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
                                                <!-- <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg> -->
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-links__item nav-links__item--has-submenu">
                                        <a class="nav-links__item-link" href="trayectoria.php">
                                            <div class="nav-links__item-body">
                                                Trayectoría
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-links__item nav-links__item--has-submenu">
                                        <a class="nav-links__item-link" href="catalogue.php">
                                            <div class="nav-links__item-body">
                                                Catálogo
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-links__item nav-links__item--has-submenu">
                                        <a class="nav-links__item-link" href="gallery.php">
                                            <div class="nav-links__item-body">
                                                Galería
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-links__item nav-links__item--has-submenu">
                                        <a class="nav-links__item-link" href="contacts.php">
                                            <div class="nav-links__item-body">
                                                Contáctanos
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="nav-panel__indicators">
                                <!-- <div class="indicator indicator--trigger--click">
                                    <button type="button" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg class="indicator__icon" width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#search-20"></use>
                                            </svg>
                                            <svg class="indicator__icon indicator__icon--open" width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#cross-20"></use>
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="indicator__dropdown">
                                        <div class="search search--location--indicator">
                                            <div class="search__body">
                                                <form class="search__form" action="">
                                                    <input class="search__input" name="search" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off">
                                                    <button class="search__button search__button--type--submit" type="submit">
                                                        <svg width="20px" height="20px">
                                                            <use xlink:href="images/sprite.svg#search-20"></use>
                                                        </svg></button>
                                                    <div class="search__border"></div>
                                                </form>
                                                <div class="search__suggestions suggestions suggestions--location--indicator">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="indicator">
                                    <a href="#" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#heart-20"></use>
                                            </svg>
                                            <span class="indicator__value">0
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="indicator indicator--trigger--click">
                                    <a href="#" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#cart-20"></use>
                                            </svg>
                                            <span class="indicator__value">
                                                3</span>
                                        </span>
                                    </a>
                                    <div class="indicator__dropdown">
                                        <div class="dropcart dropcart--style--dropdown">
                                            <div class="dropcart__body">
                                                <div class="dropcart__products-list">
                                                    <div class="dropcart__product">
                                                        <div class="product-image dropcart__product-image"><a href="/producto.php" class="product-image__body"><img class="product-image__img" src="images\navajas\colaDeRata.png" alt=""></a>
                                                        </div>
                                                        <div class="dropcart__product-info">
                                                            <div class="dropcart__product-name"><a href="#">Cola de
                                                                    rata</a></div>
                                                            <ul class="dropcart__product-options">
                                                                <li>Color: Plata</li>
                                                                <li>Material: Acero</li>
                                                            </ul>
                                                            <div class="dropcart__product-meta"><span class="dropcart__product-quantity"></span><span class="dropcart__product-price">S/100.00</span>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon"><svg width="10px" height="10px">
                                                                <use xlink:href="images/sprite.svg#cross-10"></use>
                                                            </svg></button>
                                                    </div>
                                                    <div class="dropcart__product">
                                                        <div class="product-image dropcart__product-image"><a href="#" class="product-image__body"><img class="product-image__img" src="images\navajas\filipina.png" alt=""></a></div>
                                                        <div class="dropcart__product-info">
                                                            <div class="dropcart__product-name"><a href="#">Filipina</a>
                                                            </div>
                                                            <ul class="dropcart__product-options">
                                                                <li>Color: Plata</li>
                                                                <li>Material: Acero</li>
                                                            </ul>
                                                            <div class="dropcart__product-meta"><span class="dropcart__product-quantity"></span><span class="dropcart__product-price">S/100.00</span>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon"><svg width="10px" height="10px">
                                                                <use xlink:href="images/sprite.svg#cross-10"></use>
                                                            </svg></button>
                                                    </div>
                                                    <div class="dropcart__product">
                                                        <div class="product-image dropcart__product-image"><a href="#" class="product-image__body"><img class="product-image__img" src="images\navajas\olivocurva.png" alt=""></a>
                                                        </div>
                                                        <div class="dropcart__product-info">
                                                            <div class="dropcart__product-name"><a href="#">Media O</a>
                                                            </div>
                                                            <ul class="dropcart__product-options">
                                                                <li>Color: Plata</li>
                                                                <li>Material: Acero</li>
                                                            </ul>
                                                            <div class="dropcart__product-meta"><span class="dropcart__product-quantity"></span><span class="dropcart__product-price">S/100.00</span>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon"><svg width="10px" height="10px">
                                                                <use xlink:href="images/sprite.svg#cross-10"></use>
                                                            </svg></button>
                                                    </div>

                                                </div>
                                                <div class="dropcart__totals">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th>Subtotal</th>
                                                                <td>S/300.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Envío</th>
                                                                <td>S/25.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Impuesto</th>
                                                                <td>S/0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total</th>
                                                                <td>S/325.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="dropcart__buttons"><a class="btn btn-secondary" href="./cart.php">Ver Carrito</a> <a class="btn btn-primary" href="checkout.php">Pagar</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin - data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
            </div>
        </div>
    </header>
    <!-- mobilemenu -->
    <?php include_once('mvc/view/layouts/mobilemenu.php') ?>
    <!-- photoswipe -->
    <?php include_once('mvc/view/layouts/dialog.php') ?>
    <!-- photoswipe / end -->
    <!-- mobilemenu / end -->
    <!-- desktop site__header / end -->
    <!-- site__body -->